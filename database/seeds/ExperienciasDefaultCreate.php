<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ExperienciasDefaultCreate extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experiences')->insert([

              'cargo'         =>  'Lorem',
              'empresa'       =>  'Lorem ipsum.',
              'descripcion'   =>  'Lorem ipsum dolor sit amet consectetur adipiscing, elit laoreet vivamus aenean sociis bibendum lectus, odio placerat hac nec magna.',
              'fecha_inicio'  =>  '2000/10/08',
              'fecha_final'   =>  '2008/08/11',

        ]);
    }
}
