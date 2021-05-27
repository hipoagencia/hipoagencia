<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\GalleryImages;
use App\Support\Cropper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Admin\Gallery as GalleryRequest;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.gallery.index', [
            'galleries' => $galleries
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(GalleryRequest $request)
    {
        $galleryCreate = Gallery::create($request->all());

        $validator = Validator::make($request->only('files'), ['files.*' => 'image']);

        if ($validator->fails() === true) {
            return redirect()->back()->withInput()->with(['color' => 'orange', 'message' => 'Todas as imagens devem ser do tipo JPG, JPEG ou PNG']);
        }

        if ($request->allFiles()) {
            foreach ($request->allFiles()['files'] as $image) {
                $galleryImage = new GalleryImages();
                $galleryImage->gallery = $galleryCreate->id;
                $galleryImage->path = $image->store('public/gallery/' . $galleryCreate->id);
                $galleryImage->save();
            }
        }

        return redirect()->route('admin.gallery.edit', [
            'gallery' => $galleryCreate->id
        ])->with(['type' => 'success', 'message' => 'Galeria criada com sucesso!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::where('id', $id)->first();
        return view('admin.gallery.edit', [
           'gallery' => $gallery
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(GalleryRequest $request, $id)
    {
        $gallery = Gallery::where('id', $id)->first();
        $gallery->fill($request->all());
        $gallery->save();

        $validator = Validator::make($request->only('files'), ['files.*' => 'image']);

        if ($validator->fails() === true) {
            return redirect()->back()->withInput()->with(['color' => 'orange', 'message' => 'Todas as imagens devem ser do tipo JPG, JPEG ou PNG']);
        }

        if ($request->allFiles()) {
            foreach ($request->allFiles()['files'] as $image) {
                $galleryImage = new GalleryImages();
                $galleryImage->gallery = $gallery->id;
                $galleryImage->path = $image->store('public/gallery/' . $gallery->id);
                $galleryImage->save();
            }
        }

        return redirect()->route('admin.gallery.edit', [
            'gallery' => $gallery->id
        ])->with(['type' => 'success', 'message' => 'Galeria atualizada com sucesso!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Gallery::where('id', $id)->delete();
        return redirect()->back()->with(['type' => 'success', 'message' => 'Registro deletado com sucesso!']);
    }

    public function imageSetCover(Request $request)
    {
        $imageSetCover = GalleryImages::where('id', $request->image)->first();
        $allImage = GalleryImages::where('gallery', $imageSetCover->gallery)->get();

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
        $imageDelete = GalleryImages::where('id', $request->image)->first();

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
        //$images = GalleryImages::all();
        $images = GalleryImages::where('gallery', $request->ref)->get();

        foreach ($images as $image) {
            foreach ($request->order as $order) {
                if ($order['id'] == $image->id) {
                    $image->update(['order' => $order['position']]);
                }
            }
        }

        var_dump($request->ref,$request->order, $request->all());
        return response('Atualizado com Sucesso', 200);
    }
}
