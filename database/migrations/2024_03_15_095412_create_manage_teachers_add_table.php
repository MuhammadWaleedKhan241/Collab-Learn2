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
        Schema::create('manage_teachers_add', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username');
            $table->string('email');
            $table->string('roll_no');
            $table->string('phone');
            $table->string('password');
            $table->string('confirm_password');
            $table->string('address1');
            $table->string('address2');
            $table->string('country');
            $table->string('city');
            $table->string('state/province');
            $table->string('zip');
            $table->string('date_of_birth');
            $table->string('file');
            $table->string('gender');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manage_teachers_add');
    }
};
