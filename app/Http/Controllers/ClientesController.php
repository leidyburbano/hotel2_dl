<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function showClientes(){
        $datosc = DB::table('cliente')
        ->where('genero', '=', 'F')
        ->orderBy('nombres')
        ->get();

        
        return view('Clientes.clientes' , ['Clientes'=>$datosc]);   
    }
}
