<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
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
    //jika akun yang login sesuai dengan role 
    //maka silahkan akses
    //jika tidak sesuai akan diarahkan ke home

    // $roles = array_slice(func_get_args(), 2);

    // foreach ($roles as $role) { 
    //     $user = \Auth::user()->role;
    //     if( $user == $role){
    //         return $next($request);
    //     }
    // }

    // return redirect('/');

        if( Auth::check() )
        {
            // if user is not admin take him to his dashboard
            if ( Auth::user()->isUser() ) {
                return redirect(route('user/dashboard'));
            }
            else if ( Auth::user()->isManagement() ) {
                return redirect(route('management/dashboard'));
            }
            // allow admin to proceed with request
            else if ( Auth::user()->isAdmin() ) {
                return $next($request);
            }
        }
        abort(404);  // for other user throw 404 error
    }
}