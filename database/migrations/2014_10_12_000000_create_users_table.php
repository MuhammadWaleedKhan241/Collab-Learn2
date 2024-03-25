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
            $table->integer('session_code');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            
            // $table->id();
            // $table->integer('session_code');
            // $table->string('Email')->unique();
            // $table->string('User_Name')->unique();
            // $table->string('Password');
            // $table->boolean('Active')->defaultTo(false);
            // $table->string('LastLogInIp');
            // $table->string('DisplayPic');
            // $table->timestamp('CreateDate');
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