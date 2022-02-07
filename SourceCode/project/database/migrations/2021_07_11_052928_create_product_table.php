<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('product_name');
            $table->integer('price_new');
            $table->integer('price_old');
            $table->integer('qty_product')->default('99');
            $table->text('product_desc');
            $table->string('product_thumb');
            $table->string('list_thumb_1');
            $table->string('list_thumb_2');
            $table->string('list_thumb_3');
            $table->string('list_thumb_4');
            $table->string('list_thumb_5');
            $table->text('product_content');
            $table->enum('selling_products', ['Bình thường', 'Bán chạy'])->default('Bình thường');
            $table->enum('featured_products', ['Bình thường', 'Nổi bật'])->default('Bình thường');
            $table->tinyInteger('status')->default('1');
            $table->integer('cate_id')->unsigned(); //buộc là số nguyên
            $table->foreign('cate_id')
                  ->references('cate_id')
                  ->on('category')
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
        Schema::dropIfExists('product');
    }
}
