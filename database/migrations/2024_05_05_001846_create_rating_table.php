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
        Schema::create('rating', function (Blueprint $table) {
            $table->increments('id_rating');
            $table->integer('puntaje')->nullable();
            $table->dateTime('fecha')->nullable();
            $table->integer('id_usuario_calificador')->nullable()->index('idx_rating_calificador');
            $table->integer('id_usuario_calificado')->nullable()->index('idx_rating_calificado');
            $table->integer('id_seccion_calificada')->nullable()->index('idx_rating_seccion');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rating');
    }
};
