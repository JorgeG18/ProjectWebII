<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class validationContactController extends Controller
{
    public function contact(){
        resquest()->validate([
            'name' => 'required',
            
        ]);

        return 'Datos validados';
    }
}
