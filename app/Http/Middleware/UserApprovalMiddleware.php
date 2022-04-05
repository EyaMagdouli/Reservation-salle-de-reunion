<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserApprovalMiddleware
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
        if (auth()->check()) {
            if (!auth()->user()->isApproved){
                auth()->logout();

                return redirect()->route('login')->with('message',trans('Wait till the admin approves your registration'));
            }
        }



        return $next($request);
    }
}
