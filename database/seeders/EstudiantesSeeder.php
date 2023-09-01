<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EstudiantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 15 ; $i++) { 
            DB::table('estudiantes')->insert([
                'nombre'=>Str::random(15),
                'apellido'=>Str::random(15),
                'ci'=> random_int(2188, 9999),
            ]);
        }
    }
}
