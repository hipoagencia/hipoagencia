<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\User as UserRequest;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;
use Spatie\Activitylog\Models\Activity;
use DataTables;
use function PHPUnit\Framework\isNull;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:user-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:user-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        //$users = User::users()->orderBy('id', 'DESC')->paginate(20);

        return view('admin.users.index');
    }

    public function log(Request $request)
    {

        return view('admin.users.log');

    }

    public function logShow(Request $request)
    {
        if ($request->ajax()) {
            $data = Activity::where('causer_id', $request->id)->orderBy('id', 'DESC');

            return Datatables::of($data)
                ->editColumn('created_at', function ($row) {
                    return date('d/m/Y', strtotime($row->created_at));
                })
                ->editColumn('properties', function ($row) {
                    $x = '<a href="'. route('admin.users.log.open', $row->id) .'">Abrir</a>';
                    return $x;
                })
                ->rawColumns(['properties'])
                ->make(true);
        }
    }

    public function logOpen(Request $request)
    {
        $log = Activity::where('id', $request->id)->firstOrFail();

        return view('admin.users.logCheck', ['log' => json_decode($log, true)]);
    }

    public function loginAsUser(Request $request)
    {
        $login = User::where('id', $request->user)->first();
        Auth::loginUsingId($login->id);
        return redirect()->route('user.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::orderBy('name', 'desc')->get();
        return view('admin.users.create',[
            'roles' => $roles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request)
    {
//        $users = new User();
//        $users->fill($request->all());
//        var_dump($users->getAttributes());


        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $data['email_verified_at'] = date('2022-03-28');

        $userCreate = User::create($data);
        $userCreate->assignRole($request->role);

        if (!empty($request->file('cover'))) {
            $userCreate->cover = $request->file('cover')->store('public/user');
            $userCreate->save();
        }

        return redirect()->route('admin.users.edit', [
            'user' => $userCreate->id
        ])->with(['type' => 'success', 'message' => 'Cliente cadastrado com sucesso!']);
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

            if($request->adm == '0')
                $data = User::with('roles')->where('is_admin', '0')->latest();
            else
                $data = User::with('roles')->where('is_admin', '1')->latest();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('login', function ($row) {
                    $x = '<form action="' . route('admin.users.loginAsUser', ['user' => $row->id]) . '" method="POST">' .
                        csrf_field() .
                        '<button type="submit" class="delete btn btn-primary btn-sm" onclick="return confirm(\'Você tem deseja entrar na conta deste usuário?\')">Login</button></form>';
                    return $x;
                })
                ->addColumn('role', function ($row) {
                    return ($row->roles->pluck('name') != '[]' ? $row->roles->pluck('name')[0] : '-');
                })
                ->addColumn('action', function ($row) {
                    $x =
                        '<form action="' . route('admin.users.destroy', ['user' => $row->id]) . '" method="POST">' .
                        csrf_field() . method_field("DELETE") .
                        '<a href="' . route('admin.users.edit', ['user' => $row->id]) . '" class="edit btn btn-success btn-sm">Editar</a>

                        <button type="submit" class="delete btn btn-danger btn-sm"
                            onclick="return confirm(\'Você tem certeza de que deseja deletar esse registro?\')">Deletar</button>
                        </form>
                    ';
                    return $x;
                })
                ->editColumn('name', function ($row) {
                    return $row->name . ' ' . $row->last_name;
                })
                ->editColumn('log', function ($row) {
                    return '<a href="' . route('admin.users.log', ['id' => $row->id]) . '">Registros</a>';
                })
                ->rawColumns(['action', 'log', 'login'])
                ->make(true);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->firstOrFail();
        $roles = Role::orderBy('name', 'desc')->get();

        return view('admin.users.edit', [
            'user' => $user,
            'roles' => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserRequest $request, $id)
    {
        $user = User::where('id', $id)->firstOrFail();

        if (!empty($request->file('cover'))) {
            Storage::delete($user->cover);
            $user->cover = '';
        }

        //Verifica se houve troca de senha
        if ($request->password != null) {
            $user->fill($request->all());
            $user->password = bcrypt($request->password);
        } else
            $user->fill($request->except(['password']));

        if (!empty($request->file('cover'))) {
            $user->cover = $request->file('cover')->store('public/user');
        }

        //Aplica a regra
        $user->roles()->detach();
        $user->assignRole($request->role);

        if (!$user->save()) {
            return redirect()->back()->withInput()->withErrors();
        }

        return redirect()->route('admin.users.edit', [
            'user' => $user->id
        ])->with(['type' => 'success', 'message' => 'Cliente atualizado com sucesso!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect()->back()->with(['type' => 'success', 'message' => 'Registro deletado com sucesso!']);
    }
}
