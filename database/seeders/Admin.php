<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            ['id' => 1, 'name' => 'Admin', 'username' => 'admin', 'email' => 'admin@gmail.com', 
            'role_id' => 0, 'password' => bcrypt('admin')]
        ]);
    }
}
