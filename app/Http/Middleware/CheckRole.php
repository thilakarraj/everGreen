<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
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
        $actions = $request->route()->getAction();
        $s = trim(auth()->user()->role);
        // echo $request->session()->get('lang'); exit();
        // print_r($request->only('language')); exit();
        // print_r(auth()->user()->role);  exit();
        // var_dump(in_array($s, $actions['roles'])); exit();
        // print_r($actions['roles']); exit();
        // return response("Insufficient permission",401);
        if(isset($actions['roles'])){
            if(!in_array($s, $actions['roles'])){
                // return response("Insufficient permission",401);
                // return new response('Forbidden', 403);
                return redirect('/securePage');
                // return redirect('/404');
            }
        }
        return $next($request);
    }
}
