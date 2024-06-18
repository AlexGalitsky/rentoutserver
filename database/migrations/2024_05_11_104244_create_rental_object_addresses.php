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
        Schema::create('rental_object_addresses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('rental_object_id');
            $table->text('string_address');
            $table->json('json_address');
            $table->double('lat');
            $table->double('lng');
            $table->string('entrance', 10)->default('');
            $table->string('intercom', 10)->default('');
            $table->integer('floor')->default(0);
            $table->string('apartment', 10)->default(0);
            $table->string('comment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rental_object_addresses');
    }
};
