<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Login as LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class AuthController extends Controller
{


    public function showLoginForm()
    {
        if(Auth::check() === true && Auth::user()->is_admin == 1){
            return redirect()->route('admin.dashboard');
        } else if (Auth::check() === true && Auth::user()->is_admin == 0){
            return redirect()->route('user.dashboard');
        }

        return view('admin.login');
    }

    public function login(LoginRequest $request)
    {
        $input = $request->all();
        $remember_me  = (!empty( $request->remember));

//        var_dump($request->all(), $request->all()['password']);
//        die;

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password']), $remember_me))
        {
            if (auth()->user()->is_admin == 1) {
                return redirect()->route('admin.dashboard');
            }else{
                return redirect()->route('user.dashboard');
            }
        }else{
            return redirect()->route('login')
                ->withErrors('Login ou senha incorretos');
        }
    }

    public function dashboardAdmin()
    {
        return view('admin.dashboard');
    }

    public function dashboardUser()
    {
        $products = Product::orderBy('price')->get();
        return view('user.dashboard',[
            'products' => $products
        ]);
    }

    public function profileUser()
    {
        $user = User::users()->find(auth()->user()->id);
        return view('user.profile',[
            'user' => $user
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->withErrors('Você saiu da sua conta.. volte logo!');
    }
}
