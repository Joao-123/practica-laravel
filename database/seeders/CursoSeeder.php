<?php

namespace Database\Seeders;

use App\Models\Curso;
use Carbon\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Curso::factory(10)->create();
      // $curso = new Curso();
      // $curso -> name = 'javascript';
      // $curso -> descripcion = 'el mejor curso de programacion funcional';
      // $curso -> categoria = 'programacion funcional';
      // $curso -> save();

      // $curso1 = new Curso();
      // $curso1 -> name = 'Laravel';
      // $curso1 -> descripcion = 'el mejor curso de este framework';
      // $curso1 -> categoria = 'programacion MVC';
      // $curso1 -> save();

      // $curso2 = new Curso();
      // $curso2 -> name = 'Angular';
      // $curso2 -> descripcion = 'el mejor curso de programacion web';
      // $curso2 -> categoria = 'programacion web';
      // $curso2 -> save();
    }
}
