<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        //alter users table
        Schema::table('users', function (Blueprint $table) {
            $table->string('merchant_secret')->nullable();
        });
        //jwt table
        Schema::create('jwt', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('user_id');
            $table->string('token');
            $table->string('ip_address');
            $table->string('user_agent');
            $table->string('payload');
            $table->string('last_activity');
            $table->timestamps();
            $table->softDeletes();
        });

    }
    public function down()
    {
        Schema::dropIfExists('jwt');
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('merchant_secret');
        });
    }
};
