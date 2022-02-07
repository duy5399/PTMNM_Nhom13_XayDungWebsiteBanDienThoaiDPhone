<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill', function (Blueprint $table) {
            $table->increments('bill_id');
            $table->unsignedInteger('user_id');
            $table->string('fullname');
            $table->string('username');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->text('note');
            $table->string('total');
            $table->tinyInteger('status')->default('1');
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');    //xóa danh mục 'category' -> các sản phẩm trong 'product' cũng bị xóa
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
        Schema::dropIfExists('bill');
    }
}
