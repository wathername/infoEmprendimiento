<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();


        if ($user->role_id == '2' or $user->role_id == '1' or $user->role_id == '3'){

            if ($user->statu_id != '1'){
                return \Redirect::route('home')
                    ->with('message', 'Por favor verifica tu email!, la cuenta aun no ha sido verificada');
            }

        }else{

            return \Redirect::route('home');
        }
        return $next($request);
    }
}
