<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eventos extends Controller
{
    public function evento($id){
        return view('servicios.eventos', array('id'=> $id));
        
    }
}
