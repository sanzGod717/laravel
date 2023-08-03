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
        Schema::create('invoks', function (Blueprint $table) {
            $table->unsignedBigInteger('id_api');
            $table->unsignedBigInteger('id_loca');
           
            $table->foreign('id_api')  ->references('id')->on('apis');
          
            $table->foreign('id_loca')  ->references('id')->on('locations');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoks');
    }
};
