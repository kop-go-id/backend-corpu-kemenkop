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
            $table->char('name', 50)->notNullable();
            $table->string('file')->notNullable();
            $table->unsignedBigInteger('course_material_id');
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
