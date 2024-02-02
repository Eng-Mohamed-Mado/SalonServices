<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TwoFactor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Select User Login
        $user = auth()->user();

        // Check in Login This User And Find Code Otp
        if(auth()->check() && $user->code)
        {
            // Send To Page Write Otp Get All Method verify By Use *
            if(!$request->is('verify*'))
            {
                return redirect()->route('otp');
            }
        }

        return $next($request);
    }
}
