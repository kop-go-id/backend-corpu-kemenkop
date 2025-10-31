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
        Schema::create('users', function (Blueprint $table) {
            // UUID primary key
            $table->uuid('user_id')->primary();

            // User info
            $table->string('name', 50);
            $table->string('email', 50);
            $table->string('phone', 50);
            $table->string('password', 50);
            $table->string('username', 50);
            $table->string('user_code', 50);

            // Photo (file path)
            $table->string('photo_profile')->nullable();

            // Temporary email change
            $table->string('temporary_email_status', 50)
                ->comment('Requested, Verified, or Rejected');
            $table->string('temporary_email', 50);

            // Indexes
            $table->unique('email');
            $table->unique('username');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
