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
        Schema::create('villages', function (Blueprint $table) {
            $table->uuid('village_id')->primary();
            $table->string('subdistrict_code');
            $table->string('name', 50);
            $table->string('code', 50)->unique();
            $table->integer('total_u17')->nullable();
            $table->integer('male_u17')->nullable();
            $table->integer('female_u17')->nullable();
            $table->integer('total_a17')->nullable();
            $table->integer('male_a17')->nullable();
            $table->integer('female_a17')->nullable();
            $table->string('type', 50)->comment('Desa, Kelurahan')->nullable();
            $table->decimal('village_fund', 15, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('villages');
    }
};
