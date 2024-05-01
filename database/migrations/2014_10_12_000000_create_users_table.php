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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('forename');
            $table->string('last_name');
            $table->string('dob');
            $table->string('country');
            $table->string('city');
            $table->string('mobile_number');
            $table->string('street_address_line_1');
            $table->string('street_address_line_2');
            $table->string('post_code');
            $table->string('last_logged_in');
            $table->string('ip_address');
            $table->string('mac_address');
            $table->string('user_agent');
            $table->string('email')->unique();
            $table->string('role_id');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
