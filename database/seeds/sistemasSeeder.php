<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class sistemasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           /* DB::table('micmacs')->insert([
            'id' => 1,
            'proyecto' => 'proyecto 2',
            'variable' => 'Desarrollador back-end',
            'influencia' => 8,
            'dependencia' => 5,
            'descripcion' => 'Desarrollador back-end',
            'zona' => 'Desarrollador back-end',
           //
             ]); 
*/
           $faker = Faker::create();
			for ($i=0; $i < 10; $i++) {
    		\DB::table('micmacs')->insert(array(
           'proyecto' => $faker->randomElement(['investigacion','finanzas','programacion']),
           'variable'  => $faker->randomElement(['chocolate','vainilla','cheesecake']),
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s'),
           'descripcion'  => $faker->randomElement(['At vero eos et accusamus et iusto odio', 'dignissimos ducimus qui blanditiis praesentium', 'voluptatum deleniti atque corrupti quos dolores et quas molestias']),
           'influencia'=> $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
           'dependencia'=> $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
           'zona'=> $faker->randomElement(['determinante','autonoma','peloton', 'resultado', 'enlace']),


    ));
}
    }
}
