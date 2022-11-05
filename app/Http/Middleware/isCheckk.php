<?php
use App\User;
use App\Admin;
use App\Student;
namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class isCheckk
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
        if(Auth::check()){
            if(Auth::user()->role == 'admin'){
                return $next($request);
            }else{
                // return response()->json('Your account is inactive');
                return redirect('/student');
            }
            
        }else{
            return redirect()->route('login');
        }
    }   
}
