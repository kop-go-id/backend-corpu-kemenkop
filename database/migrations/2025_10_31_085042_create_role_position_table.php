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
        Schema::create('role_positions', function (Blueprint $table) {
            $table->id('role_position_id');
            $table->unsignedBigInteger('role_id');
            $table->string('position', 50);
            $table->string('level', 50);
            $table->string('status', 50);
            $table->boolean('receiving_email')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_positions');
    }
};
