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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Enquirer's name
            $table->string('email')->nullable(); // Email (optional)
            $table->string('phone')->nullable(); // Phone number (optional)
            $table->string('program')->nullable(); // Course of interest
            $table->string('city')->nullable(); // City
            $table->string('state')->nullable(); // State
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
