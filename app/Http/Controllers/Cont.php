<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cont extends Controller
{
    public function verify(Request $request){
        $user = $request -> input('user');
        $pass = $request -> input('pass');

        if ( $user == 'Nayeli.RJ' && $pass == '050403'){
            $url = 'correcto';
        } else {
           $url= 'inc';
        }
        return view ($url, [
            'user' => $request -> input('user')
        ]);
    }


    public function login(){
        return view('inicio');
}
}