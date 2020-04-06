<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reviewcon extends Controller
{
    public function somemethod(){
        $someModel = new SomeModel;
        $someModel->setConnection('mysql2');
        $something = $someModel->find(1);
        return $something;
    }
}