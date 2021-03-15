<?php

namespace App\Http\Controllers;

class validationLoginController extends Controller
{
    public function Login(){
        resquest()->validate([
            'email' => 'requirede|email',
            'passwords' => 'required',
        ]);

        return 'Datos validados'
    }
}
