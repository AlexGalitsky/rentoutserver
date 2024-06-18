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
        Schema::create('rental_objects', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->timestamps();
            $table->string('title', 255)->default('');
            $table->text('descr')->default('');
            $table->double('rate')->default(5);
            $table->enum('object_status', ['draft', 'free', 'rented', 'pause'])->default('draft');
            $table->enum('object_type', ['apartment', 'room', 'guest_house', 'house', 'villa'])->default('apartment');
            $table->double('area')->default(0);
            $table->integer('floor')->default(0);
            $table->integer('floors_number')->default(0);
            $table->integer('single_beds')->default(0);
            $table->integer('double_beds')->default(0);
            $table->integer('rooms')->default(0);
            $table->integer('max_guests_per_request')->default(0);
            $table->integer('max_families_per_time')->default(0);
            $table->integer('bathrooms')->default(0);
            $table->double('min_cost_per_day')->default(0);
            $table->boolean('bail')->default(false);
            $table->boolean('trip_docs')->default(false);
            $table->boolean('no_children')->default(false);
            $table->boolean('no_pets')->default(false);
            $table->boolean('no_smoking')->default(false);
            $table->boolean('no_alcohol')->default(false);
            $table->boolean('no_party')->default(false);
            $table->time('check_in_time')->nullable();
            $table->time('check_out_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rental_objects');
    }
};
