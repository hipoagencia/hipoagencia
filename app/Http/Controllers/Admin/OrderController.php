<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Order as OrderRequest;
use DataTables;

class OrderController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:order-list|order-create|order-edit|order-delete', ['only' => ['index','store']]);
        $this->middleware('permission:order-create', ['only' => ['create','store']]);
        $this->middleware('permission:order-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:order-delete', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.orders.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
            $data = Order::withOnly('user')->latest()->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $x =
                        '<form action="' . route('admin.orders.destroy', ['order' => $row->id]) . '" method="POST">' .
                        csrf_field() . method_field("DELETE") .
                        '<a href="' . route('admin.orders.edit', ['order' => $row->id]) . '" class="edit btn btn-success btn-sm">Editar</a>

                        <button type="submit" class="delete btn btn-danger btn-sm"
                            onclick="return confirm(\'Você tem certeza de que deseja deletar esse registro?\')">Deletar</button>
                        </form>
                    ';
                    return $x;
                })
                ->editColumn('name', function ($row) {
                    return $row->name . ' ' . $row->last_name;
                })
                ->editColumn('user_id', function ($row) {
                    return '<a href="' . route('admin.users.edit', ['user' => $row->user_id])  . '">' . $row->user->name . '</a>';
                })
                ->rawColumns(['action','user_id'])
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
        $users = User::orderBy('name')->get();
        $order = Order::where('id', $id)->first();

        return view('admin.orders.edit',[
            'users' => $users,
            'order' => $order
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(OrderRequest $request, $id)
    {
        $order = Order::where('id', $id)->firstOrFail();
        $order->fill($request->all());
        $order->total =  str_replace(',', '.', str_replace('.', '', $request['total']));

        if (!$order->save()) {
            return redirect()->back()->withInput()->withErrors();
        }

        return redirect()->route('admin.orders.edit', [
            'order' => $order->id
        ])->with(['type' => 'success', 'message' => 'Pedido atualizado com sucesso!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Order::where('id', $id)->delete();
        return redirect()->back()->with(['type' => 'success', 'message' => 'Registro deletado com sucesso!']);
    }
}
