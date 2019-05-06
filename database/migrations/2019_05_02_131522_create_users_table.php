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
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
//            $table->string('username');
            $table->string('email')->unique();
            $table->string('name');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('tel')->nullable();
            $table->string('address')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            $table->string('provider', 255)->nullable();
            $table->string('provider_id', 255)->nullable();

        });

//        $table->bigIncrements('id');
//        $table->string('name');
//        $table->string('email')->unique()->nullable();
//        $table->timestamp('email_verified_at')->nullable();
//        $table->string('provider', 255)->nullable();
//        $table->string('provider_id', 255)->nullable()->comment('รหัสตัวตนของ facebook');
//        $table->string('password')->nullable();
//        $table->string('avatar')->default('user.jpg');
//        $table->rememberToken();
//        $table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
