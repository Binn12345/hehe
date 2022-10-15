<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class checkUser
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

        // if(Auth::check())
        // {
        //     if(Auth::user()->role == 'admin')
        //     {
        //         return $next($request);
        //     }
           
        //     else{
        //        return redirect('/student/home')->with('message', 'Access Denied'); 
        //     }


        // }   
        
        if (Auth::check()) {
            if (Auth::user()->role == 'admin') {
                return $next($request);
            } else {
                return redirect('/home');
            }
        } 
        else{
            return redirect('/login')->with('message', 'Access Denied'); 
        }


        return $next($request);

    }
}
