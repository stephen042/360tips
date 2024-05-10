<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * NOTE: Only nullables can have defaults from here.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->integer('balance');
            $table->integer('sub_balance');
            $table->string('password');
            $table->date('date_of_birth')->nullable();
            $table->string('gender');
            $table->string('country');
            $table->string('profile_pic')->nullable();
            $table->string('account_status'); // VIP ,none etc default None
            $table->integer('progress_bar_status')->default(0);
            $table->integer('verify_status'); //status means kyc  
            $table->longText('token')->nullable();
            $table->integer('role') ; //default 0 
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
