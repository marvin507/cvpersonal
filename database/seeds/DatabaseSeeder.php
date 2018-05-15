<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // $this->call(UsersTableSeeder::class);
          $this->call(UserDefaultCreate::class);
          $this->call(DescripcionDefaultCreate::class);
          $this->call(CvDefaultCreate::class);
          $this->call(ExperienciasDefaultCreate::class);
          $this->call(EducacionDefaultCreate::class);
          $this->call(HabilidadesDefaultCreate::class);
          $this->call(ProyectosDefaultCreate::class);
    }
}
