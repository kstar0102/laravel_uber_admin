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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone_number');
            $table->string('driver_photo')->nullable();
            $table->string('car_photo')->nullable();
            $table->string('passport_frontend')->nullable();
            $table->string('passport_backend')->nullable();
            $table->string('car_type')->nullable();
            $table->string('car_color')->nullable();
            $table->string('car_number')->nullable();
            $table->integer('rating')->nullable();
            $table->integer('license_verification')->nullable();
            $table->timestamp('join_date')->nullable();
            $table->timestamp('approve_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
