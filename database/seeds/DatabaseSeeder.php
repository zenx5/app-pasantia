<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        DB::table('pedidos')->truncate();
        $this->call(PedidosSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas

        $this->call(UserSeeder::class);
       $this->call(sistemasSeeder::class);
       $this->call(ServiciosSeeder::class);
       $this->call(permisssionsSeeder::class);
       $this->call(RolesSeeder::class);
       $this->call(RolesHasPSeeder::class);
       $this->call(PedidositemSeeder::class);
       


        
    }
}


