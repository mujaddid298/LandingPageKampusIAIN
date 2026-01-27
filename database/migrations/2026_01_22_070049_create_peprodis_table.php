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
        Schema::create('peprodis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prodi');
            $table->string(column: 'no_wa');
            $table->string(column: 'image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peprodis');
    }
};
