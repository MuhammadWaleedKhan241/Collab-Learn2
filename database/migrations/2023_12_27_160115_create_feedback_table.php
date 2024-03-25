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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->string('gender')->notNullable();
            $table->enum('age', ['21-25', '26-30', '31-35', '36-40', '41-50']);
            $table->string('experience')->notNullable();
            $table->string('educatuionYear')->notNullable();
            $table->string('sectorexperiance')->notNullable();
            $table->string('geolocation')->notNullable();
            $table->string('useexperiencebefore')->notNullable();
            $table->string('useful')->notNullable();
            $table->string('ownbackexpunderstandingstratmang')->notNullable();
            $table->string('understandingsm')->notNullable();
            $table->string('explainyourlearn')->notNullable();
            $table->string('backexpinclass')->notNullable();
            $table->string('learnfromother')->notNullable();
            $table->string('improvedinfuture')->notNullable();
            $table->string('anyothercomment')->notNullable();
            $table->string('permission')->notNullable();

            $table->foreign('id')->references('id')->on('users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
