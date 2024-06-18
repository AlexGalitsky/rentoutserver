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
        Schema::create('rental_object_images', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('rental_object_id');
            $table->string('name', 100);
            $table->string('extension')->default('.jpg');
            $table->boolean('is_main')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rental_object_images');
    }
};
