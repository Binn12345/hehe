<?php
use App\User;
use App\Admin;
use App\Student;
namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class isManage
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
            if(Auth::user()->role == 'super admin'){
                return $next($request);
            }else{
                // return response()->json('Your account is inactive');
                // return redirect()->route('bug')->with('success', 'Access Denied');
                return redirect('/admin');
            }
        }else{
            // return redirect()->route('/login');
            return response()->json('Your account is inactive');
        }
    }
}
