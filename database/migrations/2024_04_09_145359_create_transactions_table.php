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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('transaction_id');
            $table->date('transaction_date');
            $table->string('transaction_status');
            $table->string('transaction_amount');
            $table->integer('transaction_category'); //go to config/app to get more info
            $table->string('transaction_proof')->nullable();
            $table->string('transaction_ewallet_address')->nullable();
            $table->string('transaction_asset');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
