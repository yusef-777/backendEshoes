<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->string('description');

            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('colors_id');
            $table->unsignedBigInteger('size_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('colors_id')->references('id')->on('colors');
            $table->foreign('size_id')->references('id')->on('sizes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
