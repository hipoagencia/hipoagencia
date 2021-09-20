<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EadContent;
use App\Models\EadModule;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Storage;

class EadContentController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:eadContent-list|eadContent-create|eadContent-edit|eadContent-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:eadContent-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:eadContent-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:eadContent-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.eadContent.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $modules = EadModule::orderBy('name')->get();

        return view('admin.eadContent.create',[
            'modules' => $modules
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $contentCreate = EadContent::create($request->all());

        if (!empty($request->file('cover'))) {
            $contentCreate->cover = $request->file('cover')->store('ead');
            $contentCreate->save();
        }

        return redirect()->route('admin.ead-content.edit', [
            'ead_content' => $contentCreate->id
        ])->with(['type' => 'success', 'message' => 'Conteúdo EAD cadastrado com sucesso!']);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if ($request->ajax()) {
            $data = EadContent::latest()->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $x = '<form action="' . route('admin.ead-content.destroy', ['ead_content' => $row->id]) . '" method="POST">' .
                        csrf_field() . method_field("DELETE") .
                        '<a href="' . route('admin.ead-content.edit', ['ead_content' => $row->id]) . '" class="edit btn btn-success btn-sm">Editar</a>

                        <button type="submit" class="delete btn btn-danger btn-sm"
                            onclick="return confirm(\'Você tem certeza de que deseja deletar esse registro?\')">Deletar</button>
                        </form>
                    ';
                    return $x;
                })
                ->editColumn('created_at', function ($row) {
                    return date('d/m/Y', strtotime($row->created_at));
                })
                ->editColumn('cover', function ($row) {
                    $cover = asset($row->cover);
                    return "<img src='{$cover}' style='width:100px'/>";
                })
                ->editColumn('module', function ($row) {
                    return '<a href="'. '#' .'">' . $row->module->name . '</a>';
                })
                ->rawColumns(['action', 'cover', 'module'])
                ->make(true);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $content = EadContent::where('id', $id)->firstOrFail();
        //$content = Storage::delete('/public' . $content->cover);

        if (\Storage::disk('public')->exists($content->getOriginal('cover')))
            \Storage::disk('public')->delete($content->getOriginal('cover'));

        dd(Storage::disk('public')->delete('ead/EkxzdysWzV9kABjIlSGr0kxsyLGiSghgS0sRNMrW.jpg'));

//        if ($content != null) {
//            $content->delete();
//        }

        return redirect()->back()->with(['type' => 'success', 'message' => 'Registro deletado com sucesso!']);
    }
}
