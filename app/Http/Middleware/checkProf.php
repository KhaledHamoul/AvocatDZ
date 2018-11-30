<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Professionnel;
use App\User;


class checkProf
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
        $avocats = Professionnel::where('user_id',Auth::id())->get();
        if( $avocats->count() > 0 ) return $next($request);
        return redirect('/');
    }
}
