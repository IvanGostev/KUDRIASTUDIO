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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('img');


            $table->string('title');
            $table->text('text');
            $table->string('names');

            $table->string('ru-title');
            $table->text('ru-text');
            $table->string('ru-names');

            $table->string('es-title');
            $table->text('es-text');
            $table->string('es-names');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
