<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProyectosDefaultCreate extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([

            'archivo'       => 'public/default_proyecto.jpg',
            'proyecto'      =>  'Lorem ipsum',
            'descripcion'   =>  'Lorem ipsum dolor sit amet consectetur, adipiscing elit torquent parturient platea commodo, morbi congue ad condimentum.',
            'titulo_enlace' =>  'lorem ipsum',
            'enlace'        =>  'https://github.com/',
        ]);
    }
}
