<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HabitacionesController extends Controller
{
    public function showHabitaciones(){
        $datosh = DB::table('habitacion')
        ->get();
        return view('servicios.habitaciones',['Habitaciones'=>$datosh] ); 
    }
    
}
