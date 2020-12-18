<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReservasController extends Controller
{
    public function getReservas(){

        $con = DB::table('consulta as res')
        ->join('habitacion as hab', 'res.Numero', '=', 'hab.Numero')
        ->join('precio as pre', 'hab.precio_id', '=', 'pre.id')
        ->join('cliente as cli', 'res.cliente', '=', 'cli.id')
        
        ->select('hab.Numero','hab.foto','pre.precio','pre.Tipo')
        
        ->where('res.Salida', '=' , NULL)
        ->get(); 

        return view('reservas.reservas', ['consulta'=>$con]); 
    }






}
