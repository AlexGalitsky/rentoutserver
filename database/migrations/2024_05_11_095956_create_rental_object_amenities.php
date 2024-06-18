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
        Schema::create('rental_object_amenities', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('group_icon');
            $table->string('group_title', 255);
            $table->string('title', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rental_object_amenities');
    }
};
