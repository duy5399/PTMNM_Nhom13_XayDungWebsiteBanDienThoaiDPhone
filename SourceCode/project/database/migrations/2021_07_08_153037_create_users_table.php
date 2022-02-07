<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id');
            $table->string('fullname');
            $table->string('username');
            $table->string('password');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->enum('gender', ['male', 'female'])->default('male');
            $table->enum('is_active', ['0', '1'])->default('0');
            $table->tinyInteger('status')->default('1');
            //$table->string('email')->unique();
            //$table->timestamp('email_verified_at')->nullable();
            //$table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
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
