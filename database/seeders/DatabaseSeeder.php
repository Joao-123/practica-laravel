<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Curso;
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
        // \App\Models\User::factory(20)->create();

        $curso = new Curso();
        $curso -> name = 'javascript';
        $curso -> descripcion = 'el mejor curso de programacion funcional';
        $curso -> categoria = 'programacion funcional';
        $curso -> save();

        $curso1 = new Curso();
        $curso1 -> name = 'Laravel';
        $curso1 -> descripcion = 'el mejor curso de este framework';
        $curso1 -> categoria = 'programacion MVC';
        $curso1 -> save();

        $curso2 = new Curso();
        $curso2 -> name = 'Angular';
        $curso2 -> descripcion = 'el mejor curso de programacion web';
        $curso2 -> categoria = 'programacion web';
        $curso2 -> save();
        // \App\Models\Curso::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
