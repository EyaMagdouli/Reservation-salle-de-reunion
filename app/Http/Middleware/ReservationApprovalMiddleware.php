<?php

namespace App\Http\Middleware;

use App\Models\Reservation;
use Closure;
use Illuminate\Http\Request;

class ReservationApprovalMiddleware
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
            if (!reservation()->isApproved){

                $message= 'wait till the admin approves your reservation';

            }
            else  {
                $message= 'Reservation approved';
            }


        return redirect()->route('reservation')->with('message',trans($message));

        return $next($request);
    }
}
