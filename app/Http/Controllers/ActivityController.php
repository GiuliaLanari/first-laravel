<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function elenco(){
        return view('activity.elenco');
    }

    public function ellimina($id){
        return view('activity.ellimina', ['id'=>$id]);
    }

    public function modifica($id){
        return view('activity.modifica', ['id'=>$id]);
    }
    
    public function nuovo(){
        return view('activity.nuovo');
    }
}
