<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBilldetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billdetail', function (Blueprint $table) {
            $table->unsignedInteger('bill_id');
            $table->unsignedInteger('product_id');
            $table->string('product_name');
            $table->string('product_thumb');
            $table->integer('price_new');
            $table->integer('qty');
            $table->bigInteger('sub_total');
            $table->tinyInteger('status')->default('1');
            $table->foreign('bill_id')
                  ->references('bill_id')
                  ->on('bill')
                  ->onDelete('cascade');    //xóa danh mục 'category' -> các sản phẩm trong 'product' cũng bị xóa
            $table->foreign('product_id')
                  ->references('product_id')
                  ->on('product')
                  ->onDelete('cascade');    //xóa danh mục 'category' -> các sản phẩm trong 'product' cũng bị xóa
            $table->primary(['bill_id', 'product_id']);
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
        Schema::dropIfExists('billdetail');
    }
}
