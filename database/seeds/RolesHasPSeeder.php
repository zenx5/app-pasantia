<?php

use Illuminate\Database\Seeder;

class RolesHasPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('role_has_permissions')->insert([

                [
                    'permission_id' => 1,
                    'role_id' => 1,
                    
                ],
                

            ]);
    }
}
