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
            $table->string('name');
            $table->integer('maincatg_id')->unsigned();
            $table->integer('subcatg_id')->unsigned();
            $table->integer('brand_id')->unsigned();
            $table->integer('photo_id')->unsigned();
            $table->timestamps();
            $table->foreign('maincatg_id')->references('id')->on('maincatgs');
            $table->foreign('photo_id')->references('id')->on('photos');
            $table->foreign('subcatg_id')->references('id')->on('categories');
            $table->foreign('brand_id')->references('id')->on('brands');
            
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
