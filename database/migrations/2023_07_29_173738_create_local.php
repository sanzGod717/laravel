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
        
  Schema::create('locations', function (Blueprint $table)
      {
    $table->id();
    $table->unsignedBigInteger('api_id')
    ->nullable();
    $table->string('city');
    $table->string('state');
    $table->string('country');
    $table->string('postcode')->unique();
    $table->text('road')->nullable();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Locations');
    }
};
