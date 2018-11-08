<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Client;
use App\User;

class checkClient
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
        $clients = CLient::where('user_id',Auth::id())->get();
        if( $clients->count() > 0 ) return $next($request);
        return redirect('/');
    }
}
