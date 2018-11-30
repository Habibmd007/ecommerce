<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('sub_category_id');
            $table->integer('third_category_id')->nullable();
            $table->unsignedInteger('brand_id');
            $table->string('category_slug');
            $table->string('sub_category_slug');
            $table->string('third_category_slug')->nullable();
            $table->string('brand_slug');
            $table->string('slug');
            $table->string('product_name');
            $table->decimal('product_price',10,2);
            $table->decimal('promo_price',10,2)->nullable();
            $table->integer('product_quantity');
            $table->tinyInteger('in_stock')->default(1);
            $table->string('product_skew');
            $table->text('product_short_description');
            $table->text('product_long_description');
            $table->text('product_image');
            $table->tinyInteger('active')->default(1);
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
        Schema::dropIfExists('products');
    }
}
