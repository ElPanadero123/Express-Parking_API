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
        Schema::table('usuario', function (Blueprint $table) {
            // Asegúrate de que la tabla no tenga ya las columnas antes de intentar agregarlas
            if (!Schema::hasColumn('usuario', 'created_at')) {
                $table->timestamps();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('usuario', function (Blueprint $table) {
            // Elimina las columnas sólo si existen
            if (Schema::hasColumn('usuario', 'created_at') && Schema::hasColumn('usuario', 'updated_at')) {
                $table->dropColumn(['created_at', 'updated_at']);
            }
        });
    }
};
