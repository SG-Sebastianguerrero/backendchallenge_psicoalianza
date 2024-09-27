<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PostJobPositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES');

        foreach(range(1,50) as $index){
            DB::table('job_positions')->insert([
                'position_name' => $faker->jobTitle(),
                'area_name' => $faker->randomElement([
                    'Marketing y Estrategias', 
                    'Desarrollo', 
                    'Finanzas',
                    'Recursos Humanos',
                    'Comercial',
                    'Logística',
                    'Directivo'
                ]),
                'id_employee' => $faker->numberBetween(1, 50),
                'id_boss' => $faker->numberBetween(1, 50),
                'id_role' => $faker->numberBetween(2, 3),
            ]);
        }
    }
}
