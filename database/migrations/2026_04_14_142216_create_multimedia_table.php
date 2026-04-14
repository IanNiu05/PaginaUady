<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('multimedia', function (Blueprint $table) {
            $table->id();
            $table->string('youtube_id');
            $table->text('fb_post_text');
            $table->string('fb_post_url');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('multimedia');
    }
};