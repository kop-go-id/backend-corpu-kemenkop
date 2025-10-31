<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('provinces', function (Blueprint $table) {
            // UUID primary key
            $table->uuid('province_id')->primary();

            // Columns
            $table->string('name', 50);
            $table->string('createdAt', 50);
            $table->string('updatedAt', 50);
            $table->string('code', 50);

            // Index (optional)
            $table->unique('code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provinces');
    }
};
