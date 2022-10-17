<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 1234556,
            'Name' => 'Thoriq Abdul A',
            'Phone' => '088218682879',
            'Class' => 'XII RPL 4'
        ];
    }
}
