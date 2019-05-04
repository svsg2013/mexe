<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_news')->unsigned();
            $table->integer('id_product')->unsigned();
            $table->foreign('id_news')
                ->references('id')->on('fengshuis')
                ->onDelete('cascade');
            $table->foreign('id_product')
                ->references('id')->on('products')
                ->onDelete('cascade');
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
        Schema::dropIfExists('news_products');
    }
}
