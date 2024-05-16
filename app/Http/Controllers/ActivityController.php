<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function ellimina($id){
        return view('ellimina', ['id'=>$id]);
    }
    public function modifica($id){
        return view('modifica', ['id'=>$id]);
    }
    public function nuovo(){
        return view('nuovo');
    }
}
