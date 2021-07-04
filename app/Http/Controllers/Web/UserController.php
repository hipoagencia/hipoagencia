<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit()
    {
        $user = User::users()->find(auth()->user()->id);
        return view('user.profile', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:191',
            'last_name' => 'required|min:3|max:191',
            'cover' => 'max:1024|image',
            'zipcode' => 'required|min:8|max:9',
            'street' => 'required',
            'number' => 'required',
            'neighborhood' => 'required',
            'state' => 'required',
            'city' => 'required',
            'cell' => 'required',
        ]);

        $user = User::where('id', auth()->user()->id)->first();

        if (!empty($request->file('cover'))) {
            Storage::delete($user->cover);
            $user->cover = '';
        }

        $user->fill($request->except(['document', 'email']));

        if (!empty($request->file('cover'))) {
            $user->cover = $request->file('cover')->store('public/user');
        }

        if (!$user->save()) {
            return redirect()->back()->withInput()->withErrors();
        }

        //Volta para o checkout após completar o cadastro
        if(session('goCheckout'))
            return redirect()->route('user.checkout.cardDetails');

        return redirect()->route('user.profile')
            ->with(['type' => 'success', 'message' => 'Dados atualizados com sucesso!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
