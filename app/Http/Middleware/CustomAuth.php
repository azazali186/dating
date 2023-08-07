<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Session;

class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    { 

        $path = $request->path();
        // echo $path;
        // die('=====');
        
        // For Website section Middeware Start
        if( ($path == 'login' || $path =='register' || $path == 'seller') && Session::get('sessdata'))
        {

            return redirect('/');
        }







        // For Admin section Middeware Start
         // $path = $request->path();
         if( ($path == 'admincon/dashboard') && !Session::get('adminsesion'))
        {

            return redirect('/admincon');
        }
         if( ($path == 'admincon') && Session::get('adminsesion'))
        {

            return redirect('admincon/dashboard');
        }
        


        return $next($request);
    }
}
