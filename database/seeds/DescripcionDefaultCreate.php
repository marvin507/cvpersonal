<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DescripcionDefaultCreate extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('descriptions')->insert([

            'archivo'     =>  'public/default.png',
            'name'        =>  'Marvin Aguilar',
            'address'     =>  'Lorem ipsum dolor sit amet consectetur adipiscing elit aenean neque velit.',
            'email'       =>  'admin@email.com',
            'descripcion' =>  'Lorem ipsum dolor sit amet consectetur adipiscing elit sed feugiat elementum, curabitur facilisis ante mi donec rhoncus posuere dignissim etiam, non viverra maecenas nascetur erat porttitor tortor ac fames.',

        ]);
    }
}
