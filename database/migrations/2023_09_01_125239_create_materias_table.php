<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->integer('nota1');
            $table->integer('nota2');
            $table->integer('nota3');
            $table->unsignedBigInteger('estudiante_id');
            $table->timestamps();

            $table->foreign('estudiante_id')
              ->references('id')
              ->on('estudiantes')
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materias');
    }
};
