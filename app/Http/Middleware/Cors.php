<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Cors
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


        $response=$next($request);

         //Url a la que se le dará acceso en las peticiones
      $response->header("Access-Control-Allow-Origin", "*");
      //Métodos que a los que se da acceso
      $response->header("Access-Control-Allow-Methods", ["GET, POST, PUT, DELETE"]);
      //Headers de la petición
      $response->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');

      return $response;
    }
}
