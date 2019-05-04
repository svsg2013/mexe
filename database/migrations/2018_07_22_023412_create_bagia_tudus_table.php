<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBagiaTudusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bagia_tudus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('alias');
            $table->longText('content');
            $table->smallInteger('active')->default(1);
            $table->string('postType')->nullable();
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
        Schema::dropIfExists('bagia_tudus');
    }
}
