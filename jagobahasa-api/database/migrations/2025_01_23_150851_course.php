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
        Schema::create('courses', function (Blueprint $table) {
            $table->integer("id", 36)->autoIncrement();
            $table->string('tittle', 150);
            $table->string('description');
            $table->integer('price')->lenght(255);
            $table->string('level', 50);
            $table->string('program', 100);
            $table->string('thumbnail', 50);
            $table->integer('instructor_id')->length(36);
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->foreignId('id_users', 36);
            $table->integer('status')->length(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
