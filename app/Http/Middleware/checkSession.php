<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkSession
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

        if(!session()->has('sessionUser') && ($request->path() !='login')){
                return redirect('login')->with('fail','You must be logged in');
        }
        


        // $value = session('sessionType');


        // if($value == "user"){

        //     //if session has value and the request path is login or cert_signup return to index
        //     if(session()->has('sessionUser') && ($request->path() == 'login' || $request->path() == 'cert_signup' || $request->path() == 'pro' || $request->path() == 'basic')){
        //         return redirect('index');
        //     }

        // }

        // elseif($value == "pro"){

        //     //if session has value and the request path is login or cert_signup return to index
        //     if(session()->has('sessionUser') && ($request->path() == 'login' || $request->path() == 'cert_signup' || $request->path() == 'index' || $request->path() == 'basic')){
        //         return redirect('pro');
        //     }

        // }


        // elseif($value =="basic"){

        //     //if session has value and the request path is login or cert_signup return to index
        //     if(session()->has('sessionUser') && ($request->path() == 'login' || $request->path() == 'cert_signup' || $request->path() == 'index' || $request->path() == 'pro')){
        //         return redirect('basic');
        //     }

        // }


        return $next($request);
    }
}
