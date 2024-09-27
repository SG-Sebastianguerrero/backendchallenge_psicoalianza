<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;
class PostEmployeesSeeder extends Seeder
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
            DB::table('employees')->insert([
                'name' => $faker->firstName,
                'lastname' => $faker->lastName,
                'identification' => $faker->numerify('##########'),
                'billing_address' => $faker->word(),
                'phone' => $faker->numerify('##########'),
                'city_id' => $faker->numberBetween(1, 32),
            ]);
        }
    }
}
