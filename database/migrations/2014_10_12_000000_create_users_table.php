<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    // google auth user
    // public function up()
    // {
    //     Schema::create('users', function (Blueprint $table) {
    //         $table->increments('id');
    //         $table->string('name');
    //         $table->string('google_id');
    //         $table->string('email')->unique();
    //         $table->date('email_verified_at')->nullable();
    //         $table->string('email_verification_token', 80)->nullable();
    //         $table->string('password')->nullable();
    //         $table->string('avatar')->nullable();
    //         $table->string('avatar_original')->nullable();
    //         $table->rememberToken();
    //         $table->timestamps();
    //     });
    // }


    // social auth and email verify
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('image')->nullable();
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            $table->string('email',191)->unique()->nullable();
            $table->string('phone',32)->unique();
            $table->bigInteger('reward_point')->default(0);
            $table->date('email_verified_at')->nullable();
            $table->string('email_verification_token', 80)->nullable();
            $table->string('facebook_id', 32)->nullable();
            $table->string('google_id', 32)->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }


    // normal user
    // public function up()
    // {
    //     Schema::create('users', function (Blueprint $table) {
    //         $table->increments('id');
    //         $table->string('name');
    //         $table->string('email',191)->unique()->nullable();
    //         $table->string('phone',32)->unique();
    //         $table->bigInteger('reward_point')->default(0);
    //         $table->date('email_verified_at')->nullable();
    //         $table->string('email_verification_token', 80)->nullable();
    //         $table->string('facebook_id', 32)->nullable();
    //         $table->string('google_id', 32)->nullable();
    //         $table->string('password')->nullable();
    //         $table->rememberToken();
    //         $table->timestamps();
    //     });
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("users", function (Blueprint $table) {

            $table->dropColumn('google_id');

        });
    }
}
