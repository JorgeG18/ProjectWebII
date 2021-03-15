<?php

namespace App\Http\Controllers;

class validationLoginController extends Controller
{
    public function store(){
        resquest()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        return 'Datos validados';
    }
}
