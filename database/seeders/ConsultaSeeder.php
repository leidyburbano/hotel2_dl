<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ConsultaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $datoco = [
            [
                'Numero' => '1',
                'cliente' => '2',
                'Entrada' => '2020-10-11', 
                'Salida' => '2020-10-12',
            ],
            [

                'Numero' => '2',
                'cliente' => '2',
                'Entrada' => '2020-11-15', 
                'Salida' => '2020-11-16',

            ],
            [
                'Numero' => '2',
                'cliente' => '1',
                'Entrada' => '2020-10-13', 
                'Salida' => NULL,
            ],
            [
                'Numero' => '3',
                'cliente' => '3',
                'Entrada' => '2020-10-15', 
                'Salida' => NULL,
                
            ],
            [
                'Numero' => '4',
                'cliente' => '5',
                'Entrada' => '2020-10-22', 
                'Salida' => NULL,
                
            ]
        ];
         DB::table('consulta')->insert($datoco);
      
    }
}
