<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserDefaultCreate extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'name' => 'administrador',
            'user_name' => 'admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
