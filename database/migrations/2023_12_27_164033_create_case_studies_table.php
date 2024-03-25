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
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('session-id');
            $table->string('title');
            $table->string('sector');
            $table->string('framework');
            $table->string('model');
            $table->string('models');
            $table->string('file');
            $table->timestamps('');


            $table->foreign('id')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('Session-id')->references('id')->on('sessions')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_studies');
    }
};
