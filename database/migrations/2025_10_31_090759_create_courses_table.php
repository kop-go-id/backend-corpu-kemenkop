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
            $table->uuid('course_id')->primary();
            $table->string('name', 50);
            $table->uuid('course_category_id');
            $table->foreign('course_category_id')->references('course_category_id')->on('course_categories')->onDelete('cascade');
            $table->longText('description');
            $table->string('code_course', 50);
            $table->string('thumbnail');
            $table->string('level', 50);
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
