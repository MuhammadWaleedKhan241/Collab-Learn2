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
        Schema::create('add_sessions', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_id')->nullable();
            $table->year('year')->default(date('Y'));
            $table->integer('sessioncode');
            $table->string('attribute1')->nullable();
            $table->string('attribute2')->nullable();
            $table->string('attribute3')->nullable();
            $table->string('attribute4')->nullable();
            $table->string('attribute5')->nullable();
            $table->tinyInteger('is_country')->default(0);
            // $table->boolean('country_field')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_session');
    }
};
