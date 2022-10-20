<?php
use App\User;
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
        if (Auth::check()) {
            if (Auth::user()->role == 'admin') {
                return $next($request); 
            } else {
                return back();
                
            }
        } else {
            return redirect()->route('/');
        }
        return $next($request);
    }   
}
