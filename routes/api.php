<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudiantesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('mostrarMaterias',[EstudiantesController::class,'getMaterias']);

Route::get('notas',[EstudiantesController::class,'sumarNotas']);

Route::get('promedio',[EstudiantesController::class,'promedioNota1']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
