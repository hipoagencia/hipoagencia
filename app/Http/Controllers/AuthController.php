<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Login as LoginRequest;
use App\Mail\Auth\RecoverPassword;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

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

        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert(
            ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
        );

        $user = User::where('email', $request->email);

        $url = env('app_url') . '/nova-senha?token=' . $token;

        $data = [
            'reply_name' => env('app_name'),
            'reply_email' => env('mail_from_address'),
            'to' => $request->email,
            'to_name' => $request->name,
            'subject' => 'Recuperação de Senha no ' . env('app_name'),
            'message' => $token
        ];

        //Envio com Jobs
        \App\Jobs\Auth\RecoverPassword::dispatch($data)->delay(now()->addSeconds(5));

        return redirect()->back()->with(['type' => 'success', 'message' => 'Enviamos um link válido por 30 minutos para seu e-mail! Verifique também, sua caixa de SPAM.']);
    }

    public function newPassword(Request $request)
    {
        $token = DB::table('password_resets')->where('token', $request->token)->first();

        if (!empty($token)) {
            if(strtotime($token->created_at) < strtotime("-30 minutes")){
                echo "EXPIROU";
                return redirect()->route('recoverPassword')->with(['type' => 'danger', 'message' => 'O seu token expirou, solicite novamente.']);
            }
        }

        return view('admin.changePassword', [
            'token' => $request->token
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->withErrors('Você saiu da sua conta.. volte logo!');
    }
}
