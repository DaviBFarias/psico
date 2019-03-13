<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //Validar Login
    public function validarLogin(Request $req){
        $user = "admin";
        $senha = "admin";
        if($req["nome"] == $user && $req["senha"] == $senha){
            return view("home");
        }else{
            return view("login");
        }
    }
}
