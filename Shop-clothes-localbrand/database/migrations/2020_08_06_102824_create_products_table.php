<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name') ;
            $table->longText('introduce') ;
            $table->float('price') ;
            $table->longText('image1');
            $table->longText('image2') ;
            $table->longText('image3') ;
            $table->unsignedBigInteger('id_productline') ;
            $table->foreign('id_productline')->references('id')->on('productline') ;
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
