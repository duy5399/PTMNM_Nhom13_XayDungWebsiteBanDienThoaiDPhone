<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
            $table->string('username');
            $table->string('password');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->enum('gender', ['male', 'female'])->default('male');
            $table->string('avatar');
            $table->tinyInteger('status')->default('1');
            $table->integer('role')->default('1');
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
        Schema::dropIfExists('admin');
    }
}
