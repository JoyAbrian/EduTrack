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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('teacher-token')->unique();
            $table->string('email')->unique();
            $table->string('phone');
            $table->enum('gender', ['Male', 'Female']);
            $table->string('image-url')->nullable();
            $table->foreignId('subject_id')->constrained();
            $table->foreignId('school_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
