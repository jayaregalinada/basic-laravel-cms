<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Contracts\Auth\Factory as Auth;

class DashboardMiddleware
{
    protected $auth;

    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (is_null($guard) && ! $this->auth->check()) {
            return redirect(route('dashboard:auth.index'));
        } else if ($guard == 'auth' && $this->auth->check()) {
            return redirect(route('dashboard:index'));
        }

        return $next($request);
    }
}
