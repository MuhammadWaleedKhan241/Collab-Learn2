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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->Nullable();
            $table->tinyInteger('is_teacher')->default(0)->Nullable();
            $table->tinyInteger('is_admin')->default(0)->Nullable();
            $table->unsignedBigInteger('session_id')->nullable();
            $table->unsignedBigInteger('casestudy_id')->nullable();
            $table->string('comment')->nullable();
            $table->foreign('session_id')->references('id')->on('add_sessions')->onDelete('CASCADE');
            $table->foreign('casestudy_id')->references('id')->on('case_studies')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
