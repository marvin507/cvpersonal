<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CvDefaultCreate extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cvs')->insert([

            'archivo' => 'public/cv_basico.ott',

        ]);
    }
}