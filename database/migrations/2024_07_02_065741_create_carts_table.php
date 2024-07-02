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
        Schema::create('carts', function (Blueprint $table) {

            $table->timestamps();
            $table->id();
            $table->string('name');
            $table->string('categories');
            $table->string('subcategories');
            $table->string('color');
            $table->string('tag');
            $table->string('brand');
            $table->string('imageone');
            $table->string('imagetwo');
            $table->string('imagethre');
            $table->string('imagefour');
            $table->text('description');
            $table->decimal('price', 8, 2);
            $table->integer('quantity');
            $table->string('size');
            $table->string('filter');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
