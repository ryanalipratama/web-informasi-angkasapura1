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
        Schema::table('airporttechnologyimages', function (Blueprint $table) {
            Schema::rename('airport_technology_images', 'airporttechnologyimages');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('airporttechnologyimages', function (Blueprint $table) {
            //
        });
    }
};
