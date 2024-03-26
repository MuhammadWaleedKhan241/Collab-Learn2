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
            $table->string('teacher_id');
            $table->year('year')->default(date('Y'));
            $table->integer('sessioncode');
            $table->string('attribute1');
            $table->string('attribute2');
            $table->string('attribute3');
            $table->string('attribute4');
            $table->string('attribute5');
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
