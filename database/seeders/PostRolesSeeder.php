<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role_name' => 'Presidente',
        ]);
        DB::table('roles')->insert([
            'role_name' => 'Jefe',
        ]);
        DB::table('roles')->insert([
            'role_name' => 'Colaborador',
        ]);
    }
}
