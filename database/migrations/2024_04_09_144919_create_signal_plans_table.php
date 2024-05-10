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
        Schema::create('signal_plans', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->integer('amount');
            $table->string('duration');
            $table->string('signal_strength');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('signal_plans');
    }
};
