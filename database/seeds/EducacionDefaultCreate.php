<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EducacionDefaultCreate extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('education')->insert([

              'institucion'   => 'Lorem ipsum dolor sit',
              'titulo'        => 'Lorem',
              'estado'        => 'En proceso',

        ]);
    }
}
