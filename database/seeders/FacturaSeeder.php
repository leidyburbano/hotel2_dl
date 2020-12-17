<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datosf = [
            [
                'Numero_habitacion'=>'1',
                'cliente_id'=>'1',
                'formaPago_id'=>'1',
                'Entrada'=>'2020-12-16 20:15:10',
                'Salida'=>'2020-12-20 20:15:10',
                'Total'=>'120000'
            
            ],
            [
                'Numero_habitacion'=>'2',
                'cliente_id'=>'2',
                'formaPago_id'=>'2',
                'Entrada'=>'2020-12-15 12:15:10',
                'Salida'=>'2020-12-18 10:16:50',
                'Total'=>'180000'
            ],
            [
                'Numero_habitacion'=>'3',
                'cliente_id'=>'3',
                'formaPago_id'=>'3',
                'Entrada'=>'2020-12-09 05:05:00',
                'Salida'=>'2020-12-14 04:30:55',
                'Total'=>'450000'
            ],
            [
                'Numero_habitacion'=>'4',
                'cliente_id'=>'4',
                'formaPago_id'=>'4',
                'Entrada'=>'2020-12-02 07:38:00',
                'Salida'=>'2020-12-03 06:30:05',
                'Total'=>'120000'
            ],
            [
                'Numero_habitacion'=>'5',
                'cliente_id'=>'5',
                'formaPago_id'=>'5',
                'Entrada'=>'2020-12-05 13:45:01',
                'Salida'=>'2020-12-07 11:36:50',
                'Total'=>'300000'
            ]
        ];
        DB::table('factura')->insert($datosf);
    }
}
