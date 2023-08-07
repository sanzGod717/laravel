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
        Schema::create('bullets', function (Blueprint $table) {
            $table->id();
            $table->string('Mes');
            $table->string('Tipo');
            $table->integer('Dia');
            $table->integer('Opdia')->nullable();
            $table->text('Task');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bullets');
    }
};
