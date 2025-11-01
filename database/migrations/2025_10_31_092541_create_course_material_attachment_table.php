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
        Schema::create('course_material_attachments', function (Blueprint $table) {
            $table->id('course_material_attachment_id');
            $table->string('name', 50);
            $table->string('file');
            $table->uuid('course_material_id');
            $table->foreign('course_material_id')->references('course_material_id')->on('course_materials')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_material_attachments');
    }
};
