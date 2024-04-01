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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->foreignId('id_element');
            $table->foreignId('id_path');
            $table->integer('rarity');
            $table->enum('gender',['Female','Male']);
            $table->foreignId('id_affiliation');
            $table->date('release_data');
            $table->text('icon');
            $table->text('portrait');
            $table->text('splash_art');
            $table->foreignId('id_eidolond');
            $table->foreignId('id_skill');
            $table->foreignId('id_trace');
            $table->foreignId('id_stat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
