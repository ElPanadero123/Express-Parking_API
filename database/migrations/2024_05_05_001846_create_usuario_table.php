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
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->string('ci', 50)->nullable();
            $table->string('correo')->nullable();
            $table->integer('telefono')->nullable();
            $table->string('password')->nullable();
            $table->string('rememberToken', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};
