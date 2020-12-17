<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FormaPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = 
        [
            [
                'descripcion'=> 'T. Credito'
            ],
            [
                'descripcion'=>'T. Debito'
            ],
            [
                'descripcion'=>'Efectivo'
            ],
            [
                'descripcion'=>'PayU'
            ],
            [
                'descripcion'=>'Consigancion'
            ]
        ];
        DB::table('formapago')->insert($datos);
    }
}
