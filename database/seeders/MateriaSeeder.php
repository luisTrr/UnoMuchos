<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 15 ; $i++) { 
            DB::table('materias')->insert([
                'nota1'=> random_int(30, 100),
                'nota2'=> random_int(30, 100),
                'nota3'=> random_int(30, 100),
                'estudiante_id'=> random_int(1, 15),
            ]);
        }
    }
}
