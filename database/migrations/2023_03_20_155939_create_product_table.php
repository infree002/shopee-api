<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name_product')->nullable();
            $table->text('detail_product')->nullable();
            $table->integer('cost')->nullable();
            $table->integer('price')->nullable();
            $table->string('category')->nullable();
            $table->integer('price_sales')->nullable();
            $table->integer('stock')->nullable();
            $table->string('weight')->nullable();
            $table->string('width_product')->nullable();
            $table->string('length_product')->nullable();
            $table->string('height_product')->nullable();
            $table->integer('active')->default(0);
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
};
