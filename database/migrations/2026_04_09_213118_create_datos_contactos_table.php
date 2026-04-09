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
        Schema::create('datos_contactos', function (Blueprint $table) {
            $table->id();
            $table->string('clave')->unique(); // Ej: 'telefono', 'email', 'direccion'
            $table->text('valor');
            $table->string('icono')->nullable(); // Para clases de FontAwesome 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datos_contactos');
    }
};
