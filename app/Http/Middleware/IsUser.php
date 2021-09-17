<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isNull;

class IsUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check() === true && auth()->user()->is_admin == 0 || auth()->user()->is_admin == 1){
            return $next($request);
        }

        return redirect()->route('login')->with('error',"Você não não está logado");
    }
}
