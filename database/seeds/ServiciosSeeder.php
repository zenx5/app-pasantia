<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        

            \DB::table('servicios')->insert([

                [
                    'idservicio' => 1,
                    'nombre' => 'Mactor',
                    'cantidad' => 1,
                    'slug' => 'Valora relaciones de fuerza entre los actores',
                    'descripcion' => 'Busca valorar las relaciones de fuerza entre los actores',
                    'precio' => 2.00,
                    'created_at' => NULL,
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'idservicio' => 2,
                    'nombre' => 'Morphol',
                    'cantidad' => 1,
                    'slug' => 'útil para la construcción de escenarios',
                    'descripcion' => 'Permite explorar de manera relativamente detallada el campo de escenarios posibles.',
                    'precio' => 5.00,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'idservicio' => 3,
                    'nombre' => 'Smic Prob',
                    'cantidad' => 1,
                    'slug' => 'Evalúa escenarios',
                    'descripcion' => 'Los métodos de impactos cruzados probabilísticos se orientan a determinar probabilidades simples y condicionales de hipótesis y/o eventos.',
                    'precio' => 6.00,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'idservicio' => 4,
                    'nombre' => 'Micmac',
                    'cantidad' => 1,
                    'slug' => 'Procesan variables',
                    'descripcion' => 'Ofrece la posibilidad de describir un sistema con ayuda de una matriz que relaciona todos sus elementos constitutivos.',
                    'precio' => 3.00,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'idservicio' => 5,
                    'nombre' => 'Multipol',
                    'cantidad' => 1,
                    'slug' => 'Procesa elección de estrategias',
                    'descripcion' => 'El método Multipol pretende comparar diferentes acciones o soluciones a un problema.',
                    'precio' => 8.00,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],

            ]);

         

    }
}