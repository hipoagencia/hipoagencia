<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Login as LoginRequest;
use App\Mail\Auth\RecoverPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{


    public function showLoginForm()
    {
        if (Auth::check() === true && Auth::user()->is_admin == 1) {
            return redirect()->route('admin.dashboard');
        } else if (Auth::check() === true && Auth::user()->is_admin == 0) {
            return redirect()->route('user.dashboard');
        }

        return view('admin.login');
    }

    public function login(LoginRequest $request)
    {
        $input = $request->all();
        $remember_me = (!empty($request->remember));

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']), $remember_me)) {
            $this->authenticated($request->getClientIp());

            //Desloga de todas as outras sessões do mesmo usuário
            Auth::logoutOtherDevices($input['password']);

            if (auth()->user()->is_admin == 1) {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('user.dashboard');
            }
        } else {
            return redirect()->route('login')
                ->withErrors('Login ou senha incorretos');
        }
    }

    public function authenticated($ip)
    {
        $user = User::where('id', Auth::user()->id);
        $user->update([
            'last_login_at' => date('Y-m-d H:i:s'),
            'last_login_ip' => $ip
        ]);
    }

    public function dashboardAdmin()
    {
        return view('admin.dashboard');
    }

    public function dashboardUser()
    {
        $products = Product::orderBy('price')->get();
        return view('user.dashboard', [
            'products' => $products
        ]);
    }

    public function profileUser()
    {
        $user = User::users()->find(auth()->user()->id);
        return view('user.profile', [
            'user' => $user
        ]);
    }

    public function recoverPassword()
    {
        return view('admin.recoverPassword');
    }

    public function recoverPasswordSendMail(Request $request)
    {
        //consultar e pegar os dados do cliente e preencher abaixo

        $data = [
            'reply_name' => env('app_name'),
            'reply_email' => env('mail_from_address'),
            'to' => 'daniel_martins_4@live.com',
            'to_name' => 'Daniel',
            'subject' => 'Recuperação de Senha no ' . env('app_name'),
            'message' => 'Ds23jsdb'
        ];

       //Envio com Jobs
        \App\Jobs\Auth\RecoverPassword::dispatch($data)->delay(now()->addSeconds(5));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->withErrors('Você saiu da sua conta.. volte logo!');
    }
}
