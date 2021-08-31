<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserRoleController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','store']]);
        $this->middleware('permission:role-create', ['only' => ['create','store']]);
        $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */

    public function sysPermission()
    {
//        Permission::create(['name' => 'user-list']);
//        Permission::create(['name' => 'user-create']);
//        Permission::create(['name' => 'user-edit']);
//        Permission::create(['name' => 'user-delete']);

//        Permission::create(['name' => 'role-list']);
//        Permission::create(['name' => 'role-create']);
//        Permission::create(['name' => 'role-edit']);
//        Permission::create(['name' => 'role-delete']);

//        Permission::create(['name' => 'blog-list']);
//        Permission::create(['name' => 'blog-create']);
//        Permission::create(['name' => 'blog-edit']);
//        Permission::create(['name' => 'blog-delete']);

//        Permission::create(['name' => 'content-list']);
//        Permission::create(['name' => 'content-create']);
//        Permission::create(['name' => 'content-edit']);
//        Permission::create(['name' => 'content-delete']);

//        Permission::create(['name' => 'gallery-list']);
//        Permission::create(['name' => 'gallery-create']);
//        Permission::create(['name' => 'gallery-edit']);
//        Permission::create(['name' => 'gallery-delete']);
//
//        Permission::create(['name' => 'gallery-list']);
//        Permission::create(['name' => 'gallery-create']);
//        Permission::create(['name' => 'gallery-edit']);
//        Permission::create(['name' => 'gallery-delete']);
//
//        Permission::create(['name' => 'order-list']);
//        Permission::create(['name' => 'order-create']);
//        Permission::create(['name' => 'order-edit']);
//        Permission::create(['name' => 'order-delete']);
//
//        Permission::create(['name' => 'product-list']);
//        Permission::create(['name' => 'product-create']);
//        Permission::create(['name' => 'product-edit']);
//        Permission::create(['name' => 'product-delete']);
//
//        Permission::create(['name' => 'category-list']);
//        Permission::create(['name' => 'category-create']);
//        Permission::create(['name' => 'category-edit']);
//        Permission::create(['name' => 'category-delete']);


    }

    public function index()
    {
        $this->sysPermission();

        $roles = Role::orderBy('id', 'DESC')->paginate(20);
        return view('admin.roles.index', [
            'roles' => $roles
        ]);

        //auth()->user()->assignRole('superAdmin');

        //Criar tipo de Usuário
//        Role::create(['name' => 'admin']);
//
        //Criar permissão

//
        //Dar permissão ao tipo de usuário
//        $role = Role::findByName('admin');
//        $permission = Permission::findByName('show user');
//        $role->givePermissionTo($permission);


        //auth()->user()->assignRole('admin');

        //dd(auth()->user()->getPermissionsViaRoles(), auth()->user()->getRoleNames());

//        $roles = Role::pluck('name','id')->all();


//        return view('admin.roles.index',[
//            'roles' => $roles
//        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::get();

        return view('admin.roles.create', [
            'permissions' => $permissions
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
        $role = Role::create(['name' => $request->name]);

        $checkedIds = $request->input('roles');

        $role->syncPermissions($request->get('roles'));

        return redirect()->route('admin.roles.edit', [
            'role' => $role->id
        ])->with(['type' => 'success', 'message' => 'Perfil criado com sucesso!']);
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
        $role = Role::findById($id);
        $permissions = Permission::get();

        return view('admin.roles.edit', [
            'role' => $role,
            'permissions' => $permissions
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {

        $roleName = Role::findById($request->id);
        $roleName->update(['name' => $request->name]);

        $checkedIds = $request->input('roles');

        $role = Role::findById($id);
        $role->syncPermissions($request->get('roles'));

        return redirect()->route('admin.roles.edit', [
            'role' => $role->id
        ])->with(['type' => 'success', 'message' => 'Permissões atualizadas com sucesso!']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Role::where('id', $id)->delete();
        return redirect()->back()->with(['type' => 'success', 'message' => 'Perfil deletado com sucesso!']);
    }
}
