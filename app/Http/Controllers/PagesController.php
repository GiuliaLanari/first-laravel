<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function elenco(){
        return view('elenco');
    }

   
    public function singola($id){
        return view('singola', ['id'=>$id]);
    }

    public function welcome() {
        return view('welcome');
    }
   
}
