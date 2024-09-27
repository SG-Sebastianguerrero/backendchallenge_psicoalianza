<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Elisa Gómez',
            'email' => 'test@example.com',
            'password' => '$2y$10$bhNCW6EsjG0mo3qGFkZxJupDaRih7bBb7.WtB.OrD9egpBG/qJMbO',
        ]);
    }
}
