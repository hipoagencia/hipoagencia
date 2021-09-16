<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Product;
use App\Models\ProductImages;
use App\Payment\PagSeguroV3\Subscription;
use App\Support\Cropper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Admin\Product as ProductRequest;

class ProductController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','store']]);
        $this->middleware('permission:product-create', ['only' => ['create','store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::withOnly('categories')->where('recurrent', 'Produto')->orderBy('id', 'DESC')->paginate(20);
        return view('admin.product.index', [
            'products' => $products
        ]);

    }

    public function plans()
    {
        $products = Product::withOnly('categories')->where('recurrent', 'Assinatura')->orderBy('id', 'DESC')->paginate(20);

        return view('admin.product.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Categories::orderBy('name');
        return view('admin.product.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProductRequest $request)
    {
//        $product = new Product();
//        $product->fill($request->all());
//        var_dump($product->getAttributes());
//        die;

//        dd($planPagSeguro = (new Subscription())->planCreate());

        $productCreate = Product::create($request->all());

        //Cria o plano no pagseguro e salva no banco de dados
        if ($request->recurrent == "Assinatura" && $request->typePayment = "Mensal") {

            $planPagSeguro = (new Subscription())->planCreate();
            $product = Product::where('id', $productCreate->id)->update(array('pagseguroPlanCode' => $planPagSeguro));

        }

        $validator = Validator::make($request->only('files'), ['files.*' => 'image']);

        if ($validator->fails() === true) {
            return redirect()->back()->withInput()->with(['color' => 'orange', 'message' => 'Todas as imagens devem ser do tipo JPG, JPEG ou PNG']);
        }

        if ($request->allFiles()) {
            foreach ($request->allFiles()['files'] as $image) {
                $productImage = new ProductImages();
                $productImage->product = $productCreate->id;
                $productImage->path = $image->store('public/product/' . $productCreate->id);
                $productImage->save();
            }
        }

        $productCreate->categories()->sync($request->all()['categories']);

        return redirect()->route('admin.products.edit', [
            'product' => $productCreate->id
        ])->with(['type' => 'success', 'message' => 'Produto criado com sucesso!']);

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::where('id', $id)->firstOrFail();
        $categories = Categories::orderBy('name');

        return view('admin.product.edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProductRequest $request, $id)
    {

        $product = Product::where('id', $id)->firstOrFail();
        if ($product->recurrent == "Assinatura" && $product->typePayment = "Mensal") {
            $planPagSeguro = (new Subscription())->planCreate();
            $product->pagseguroPlanCode = $planPagSeguro;
        }
        $product->fill($request->all());
        $product->save();

        $validator = Validator::make($request->only('files'), ['files.*' => 'image']);

        if ($validator->fails() === true) {
            return redirect()->back()->withInput()->with(['color' => 'orange', 'message' => 'Todas as imagens devem ser do tipo JPG, JPEG ou PNG']);
        }

        if ($request->allFiles()) {
            foreach ($request->allFiles()['files'] as $image) {
                $productImage = new ProductImages();
                $productImage->product = $product->id;
                $productImage->path = $image->store('public/product/' . $product->id);
                $productImage->save();
            }
        }

        $product->categories()->sync($request->all()['categories']);

        return redirect()->route('admin.products.edit', [
            'product' => $product->id
        ])->with(['type' => 'success', 'message' => 'Produto atualizado com sucesso!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Product::where('id', $id)->delete();
        return redirect()->back()->with(['type' => 'success', 'message' => 'Registro deletado com sucesso!']);
    }

    public function imageSetCover(Request $request)
    {
        $imageSetCover = ProductImages::where('id', $request->image)->first();
        $allImage = ProductImages::where('product', $imageSetCover->product)->get();

        foreach ($allImage as $image) {
            $image->cover = null;
            $image->save();
        }

        $imageSetCover->cover = true;
        $imageSetCover->save();

        $json = [
            'success' => true
        ];

        return response()->json($json);
    }

    public function imageRemove(Request $request)
    {
        $imageDelete = ProductImages::where('id', $request->image)->first();

        Storage::delete($imageDelete->path);
        Cropper::flush($imageDelete->path);

        $imageDelete->delete();

        $json = [
            'success' => true
        ];

        return response()->json($json);
    }

    public function imageOrder(Request $request)
    {
        //$images = ProductImages::all();
        $images = ProductImages::where('product', $request->ref)->get();

        foreach ($images as $image) {
            foreach ($request->order as $order) {
                if ($order['id'] == $image->id) {
                    $image->update(['order' => $order['position']]);
                }
            }
        }

        //var_dump($request->ref,$request->order);
        return response('Atualizado com Sucesso', 200);
    }
}
