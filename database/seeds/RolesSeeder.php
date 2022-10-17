<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
\DB::table('roles')->insert([

                [
                    'id' => 1,
                    'name' => 'admin',
                    'guard_name' => 'web',
                    'created_at' => '2018-12-23 03:10:21',
                    'updated_at' => '2018-12-23 03:10:21',
                ],
                

            ]);
    }
}
