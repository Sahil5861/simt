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
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Enquirer's name
            $table->string('email')->nullable(); // Email (optional)
            $table->string('phone')->nullable(); // Phone number (optional)
            $table->string('branch')->nullable(); // Course of interest
            $table->string('city')->nullable(); // City
            $table->string('state')->nullable(); // State
            $table->string('checked')->nullable(); // Checked status (default: 0)
            $table->timestamps(); // Created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enquiries');
    }
};
