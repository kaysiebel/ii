<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->float('piece_start_stock', 10, 3)->nullable();
            $table->float('piece_min_stock', 10, 3)->nullable();
            $table->float('piece_max_stock', 10, 3)->nullable();
            $table->float('piece_order_stock', 10, 3)->nullable();
            $table->float('piece_weight', 10, 3)->nullable();
            $table->float('unit_start_stock', 10, 3)->nullable();
            $table->float('unit_min_stock', 10, 3)->nullable();
            $table->float('unit_max_stock', 10, 3)->nullable();
            $table->float('unit_order_stock', 10, 3)->nullable();
            $table->float('unit_weight', 10, 3)->nullable();
            $table->float('unit_size', 10, 3)->nullable();
            $table->text('location')->nullable();
            $table->float('location_maxweight', 10, 3)->nullable();
            $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
