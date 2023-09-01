<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;
use App\Models\Estudiantes;
use Illuminate\Support\Facades\DB;

class EstudiantesController extends Controller
{
    public function getMaterias(){
        $materias = Materia::all();
        return Response() -> json($materias);
    }
    public function sumarNotas(){
        // $estudiantes = DB::table('estudiantes')
        // ->join('materias', 'estudiantes.id', '=', 'materias.estudiante_id')
        // ->select('estudiantes.id', 'estudiantes.nombre', 'estudiantes.apellido', DB::raw('SUM(materias.nota1 + materias.nota2 + materias.nota3) AS Suma_notas'))
        // ->groupBy('estudiantes.id', 'estudiantes.nombre', 'estudiantes.apellido')
        // ->get();

        // return response()->json($estudiantes);
        $materias = Materia::all();

        $suma = $materias->sum('nota1');
        return response()->json(['suma',$suma]);
    }
    public function promedioNota1(){
        $materias = Materia::all();

        $promedio = $materias->avg('nota1');
        return response()->json(['promedio',$promedio]);
    }
}
