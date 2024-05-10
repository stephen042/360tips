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
        Schema::create('real_estates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('real_estate_id');
            $table->dateTime('real_estate_time');
            $table->integer('real_estate_status');
            $table->integer('real_estate_stake_amount');
            $table->longText('real_estate_description');
            $table->string('real_estate_duration');
            $table->integer('real_estate_profit_loss_amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('real__estates');
    }
};
