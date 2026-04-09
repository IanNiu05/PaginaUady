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
        Schema::create('programas', function (Blueprint $table) {
        $table->id();
        $table->string('nombre'); // Ej: Licenciatura en Administración
        $table->string('tipo'); // Ej: "licenciatura" o "posgrado"
        $table->string('slug')->unique(); // Para la URL (ej: "administracion")
        $table->text('descripcion'); // Todo el texto descriptivo
        $table->text('perfil_ingreso')->nullable();
        $table->text('perfil_egreso')->nullable();
        $table->string('imagen_banner')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programas');
    }

};
