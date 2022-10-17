<?php

use Illuminate\Database\Seeder;
Use App\User;
Use App\Admin;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $admin_id = User::where('name','Pool Lopez')->value('id');
        $admin_name = User::where('id','1')->value('name');
        Admin::create([
              'admin_id' => $admin_id,
              'name' => $admin_name
        ]);
    }
}
