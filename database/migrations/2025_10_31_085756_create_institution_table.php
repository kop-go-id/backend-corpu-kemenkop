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
        Schema::create('institutions', function (Blueprint $table) {
            $table->id('institution_id');
            $table->string('name', 50);
            $table->uuid('province_id');
            $table->foreign('province_id')->references('province_id')->on('provinces')->onDelete('cascade');
            $table->longText('personal_description')->nullable();
            $table->uuid('district_id');
            $table->foreign('district_id')->references('district_id')->on('districts')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institutions');
    }
};
