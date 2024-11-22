<?php

namespace Database\Seeders;

use App\Models\Estudiante;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;


class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        

        

        Estudiante::factory()->times(15)->create();
        Curso::factory()->times(8)->create()->each(function ($curso) {
            $curso->estudiantes()->sync(
                Estudiante::all()->random(5)
        );
        });
    }
}
