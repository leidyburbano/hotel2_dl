<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class HabitacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datosh = [
            [
                'descripcion'=>'habitación individual donde solo duerme una persona.',
                'numCamas'=>'1',
                'foto'=>'individual.jpg',
                'precio_id'=>'1',
            
            ],
            [
                'descripcion'=>'habitaciones para 2 o 3 personas.',
                'numCamas'=>'2',
                'foto'=>'doble.jpg',
                'precio_id'=>'2'
            ],
            [
                'descripcion'=>'se hospedarán 3 personas.',
                'numCamas'=>'1',
                'foto'=>'triple.jpg',
                'precio_id'=>'3'
            ],
            [
                'descripcion'=>'Las suites brindan más espacio comodo.',
                'numCamas'=>'4',
                'foto'=>'suit.jpg',
                'precio_id'=>'4'
            ],
            [
                'descripcion'=>'con vistas al río o a la piscina.',
                'numCamas'=>'3',
                'foto'=>'Queen.jpg',
                'precio_id'=>'5'
            ]
        ];
        DB::table('habitacion')->insert($datosh);
    }
}
