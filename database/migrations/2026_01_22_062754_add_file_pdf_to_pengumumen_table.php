<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up(): void
{
    Schema::table('pengumumen', function (Blueprint $table) {
        $table->string('document')->nullable()->after('content');
    });
}

public function down(): void
{
    Schema::table('pengumumen', function (Blueprint $table) {
        $table->dropColumn('file_pdf');
    });
}

};
