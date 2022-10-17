<?php

use Illuminate\Database\Seeder;

class permisssionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('permissions')->insert([

                [
                    'id' => 1,
                    'name' => 'menu admin',
                    'guard_name' => 'web',
                    'created_at' => '2018-12-23 03:10:21',
                    'updated_at' => '2018-12-23 03:10:21',
                ],
                

            ]);

    }
}
