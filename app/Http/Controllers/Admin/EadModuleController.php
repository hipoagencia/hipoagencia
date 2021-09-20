<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\EadModule;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\EadModule as ModuleRequest;
use DataTables;

class EadModuleController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:eadModule-list|eadModule-create|eadModule-edit|eadModule-delete', ['only' => ['index','store']]);
        $this->middleware('permission:eadModule-create', ['only' => ['create','store']]);
        $this->middleware('permission:eadModule-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:eadModule-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.eadModule.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Categories::orderBy('name')->get();
        $users = User::orderBy('name')->get();

        return view('admin.eadModule.create', [
            'categories' => $categories,
            'users' => $users
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ModuleRequest $request)
    {
        $moduleCreate = EadModule::create($request->all());

        if (!empty($request->file('cover'))) {
            $moduleCreate->cover = $request->file('cover')->store('ead');
            $moduleCreate->save();
        }

        $moduleCreate->categories()->sync($request->all()['categories']);

        return redirect()->route('admin.ead-module.edit', [
            'ead_module' => $moduleCreate->id
        ])->with(['type' => 'success', 'message' => 'Módulo cadastrado com sucesso!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if ($request->ajax()) {
            $data = EadModule::withOnly('categories')->latest()->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $x = '<form action="' . route('admin.ead-module.destroy', ['ead_module' => $row->id]) . '" method="POST">' .
                        csrf_field() . method_field("DELETE") .
                        '<a href="' . route('admin.ead-module.edit', ['ead_module' => $row->id]) . '" class="edit btn btn-success btn-sm">Editar</a>

                        <button type="submit" class="delete btn btn-danger btn-sm"
                            onclick="return confirm(\'Você tem certeza de que deseja deletar esse registro?\')">Deletar</button>
                        </form>
                    ';
                    return $x;
                })
                ->editColumn('created_at', function ($row) {
                    return date('d/m/Y', strtotime($row->created_at));
                })
                ->editColumn('categories', function ($row) {
                    $categories = "";
                    foreach ($row->categories as $category)
                        $categories = $categories  . $category->name. ', ';

                    return $categories;
                })
                ->editColumn('cover', function ($row) {
                    $cover = asset($row->cover);
                    return "<img src='{$cover}' style='width:100px'/>";
                })
                ->rawColumns(['action', 'cover'])
                ->make(true);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $module = EadModule::where('id', $id)->firstOrFail();
        $categories = Categories::orderBy('name')->get();
        $users = User::orderBy('name')->get();

        return view('admin.eadModule.edit', [
            'module' => $module,
            'categories' => $categories,
            'users' => $users
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ModuleRequest $request, $id)
    {
        $module = EadModule::where('id', $id)->firstOrFail();
        $module->fill($request->all());

        if (!empty($request->file('cover'))) {
            $module->cover = $request->file('cover')->store('ead');
        }

        if (!$module->save()) {
            return redirect()->back()->withInput()->withErrors();
        }

        $module->categories()->sync($request->all()['categories']);

        return redirect()->route('admin.ead-module.edit', [
            'ead_module' => $module->id
        ])->with(['type' => 'success', 'message' => 'Módulo atualizado com sucesso!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        EadModule::where('id', $id)->delete();
        return redirect()->back()->with(['type' => 'success', 'message' => 'Registro deletado com sucesso!']);
    }
}
