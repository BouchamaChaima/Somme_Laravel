<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Tmd
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
        $messages = [
            'required' => 'Veuillez saisir une valeur.',
            'numeric'  => 'Merci de saisir une valeur numérique.'
        ];

        $validator = Validator::make($request->all(),[
            'Nombre1' => 'required | numeric',
            'Nombre2' => 'required | numeric',
        ],$messages);

        if($validator->fails()){
            return redirect('/')->withErrors($validator);
        }

        return $next($request);
    }
}
