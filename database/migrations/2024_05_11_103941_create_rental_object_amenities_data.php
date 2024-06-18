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
        Schema::create('rental_object_amenities_data', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('rental_object_id');
            $table->integer('rental_object_amenity_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rental_object_amenities_data');
    }
};
