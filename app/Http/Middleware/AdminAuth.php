<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuth
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
        $admin = User::where('admin_level', '1')->first();
        // if(isset($request->auth) && $request->auth == '')
        if (is_null($admin)) return redirect('/');
        if (!Auth::User()) return redirect('/');

        if (Auth::User()->email == $admin->email) {
            return $next($request);
        } else {
            Auth::logout();
            return redirect('/');
        }
    }
}
