<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('acceso_rapidos', function (Blueprint $table) {
            $table->id();
            $table->string('icono');
            $table->string('titulo');
            $table->string('subtitulo');
            $table->string('url')->default('#');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('acceso_rapidos');
    }
};