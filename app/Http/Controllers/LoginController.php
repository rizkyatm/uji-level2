<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;

class LoginController extends Controller
{
    public function postlogin(Request $request){
        // dd($request->all());

        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('pelanggaransiswa');
        }else{
            return redirect('/');
        }  
    }

    public function logout(Request $request){
        // dd($request->all());
        Auth::logout();
        return redirect('/');
      
    }
}
