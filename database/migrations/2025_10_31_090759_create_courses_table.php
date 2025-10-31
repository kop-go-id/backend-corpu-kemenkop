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
            $table->id('course_id');
            $table->char('name', 50)->notNullable();
            $table->unsignedBigInteger('course_category_id'); // ubah ke unsignedBigInteger
            $table->longText('description')->notNullable();
            $table->char('code_course', 50)->notNullable();
            $table->string('thumbnail')->notNullable();
            $table->char('level', 50)->notNullable();
            $table->timestamps();
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
