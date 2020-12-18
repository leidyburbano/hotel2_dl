<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class HabitacionesController extends Controller
{


    public function showHabitaciones(){

        
        $datosh = DB::table('habitacion as hab')
        ->join('precio as pre', 'hab.precio_id', '=', 'pre.id')

        ->select('hab.Numero','hab.descripcion','hab.numCamas','hab.foto','pre.precio','pre.Tipo')
        ->get(); 
        
        return view('servicios.habitaciones',['habitacion'=>$datosh]);
    }
}