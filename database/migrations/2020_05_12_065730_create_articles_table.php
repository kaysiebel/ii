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
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
            $table->decimal('piece_start_stock', 10, 3)->default(0);
            $table->decimal('piece_min_stock', 10, 3)->default(0);
            $table->decimal('piece_max_stock', 10, 3)->default(0);
            $table->decimal('piece_order_stock', 10, 3)->default(0);
            $table->decimal('piece_weight', 10, 3)->default(0);
            $table->decimal('unit_start_stock', 10, 3)->default(0);
            $table->decimal('unit_min_stock', 10, 3)->default(0);
            $table->decimal('unit_max_stock', 10, 3)->default(0);
            $table->decimal('unit_order_stock', 10, 3)->default(0);
            $table->decimal('unit_weight', 10, 3)->default(0);
            $table->decimal('unit_size', 10, 3)->default(0);
            $table->text('location')->nullable();
            $table->decimal('location_maxweight', 10, 3)->default(0);
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
