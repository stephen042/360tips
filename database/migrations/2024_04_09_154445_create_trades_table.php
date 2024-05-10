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
        Schema::create('trades', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('trade_id');
            $table->dateTime('trade_time');
            $table->integer('trade_status'); // go to config for more info
            $table->integer('trade_stake_amount');
            $table->string('trade_by');
            $table->string('trade_type');
            $table->string('trade_asset');
            $table->string('trade_duration');
            $table->string('trade_market'); // buy or sell
            $table->integer('trade_profit_loss_amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trades');
    }
};
