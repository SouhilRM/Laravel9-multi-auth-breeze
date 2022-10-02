<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //la guard par default est 'web' on a rajouter le guard 'admin' pour check si l'utilisateur authetifier est un admin ou non
        if(!Auth::guard('admin')->check()){

            //on redirige vers longin_form avec un message d'erreur 
            return redirect()->route('login_from')->with('error','Pliz login first !!');
        }




        return $next($request);
    }
}
