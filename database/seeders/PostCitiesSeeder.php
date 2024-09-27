<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostCitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departaments = [
            'Amazonas',
            'Antioquía',
            'Arauca',
            'Atlántico',
            'Bolívar',
            'Boyacá',
            'Caldas',
            'Caquetá',
            'Casanare',
            'Cauca',
            'Cesar',
            'Chocó',
            'Córdoba',
            'Cundinamarca',
            'Guainía',
            'Guaviare',
            'Huila',
            'La Guajira',
            'Magdalena',
            'Meta',
            'Nariño',
            'Norte de Santander',
            'Putumayo',
            'Quindío',
            'Risaralda',
            'San Andrés',
            'Santander',
            'Sucre',
            'Tolima',
            'Valle del Cauca',
            'Vaupés',
            'Vichada',
        ];

        $capitals = [
            'Leticia',
            'Medellín',
            'Arauca',
            'Barranquilla',
            'Cartagena de Indias',
            'Tunja',
            'Manizales',
            'Florencia',
            'Yopal',
            'Popayán',
            'Valledupar',
            'Quibdó',
            'Montería',
            'Bogotá',
            'Inírida',
            'San José del Guaviare',
            'Neiva',
            'Riohacha',
            'Santa Marta',
            'Villavicencio',
            'San Juan de Pasto',
            'San José de Cúcuta',
            'Mocoa',
            'Armenia',
            'Pereira',
            'San Andrés',
            'Bucaramanga',
            'Sincelejo',
            'Ibagué',
            'Cali',
            'Mitú',
            'Puerto Carreño'
        ];

        foreach(range(0,31) as $index){
            DB::table('cities')->insert([
                'city_name' => $capitals[$index],
                'departament' =>  $departaments[$index],
            ]);
        }
    }
}
