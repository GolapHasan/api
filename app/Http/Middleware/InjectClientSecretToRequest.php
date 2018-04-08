<?php

namespace App\Http\Middleware;
use Closure;

class InjectClientSecretToRequest
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
        $request->request->add([
            'client_id' => '2',
            'client_secret' => env('PASSPORT_CLIENT_SECRET'),
            'grant_type' => 'password'
        ]);
        return $next($request);
    }
}