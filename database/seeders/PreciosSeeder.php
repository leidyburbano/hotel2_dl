<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PreciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datop = 
        [
            [
                'Tipo' => 'Individual' ,
                'precio' => '30.000' ,
            
            ],
            [
                'Tipo' => 'Doble' ,
                'precio' => '60.000' 
            ],
            [
                'Tipo' => 'Triple' ,
                'precio' => '90.000' 
            ],
            [
                'Tipo' => 'Suite' ,
                'precio' => '120.000' 
            ],
            [
                'Tipo' => 'Queen' ,
                'precio' => '150.000' 
            ]
        ];
        DB::table('precio')->insert( $datop );

    }
}
