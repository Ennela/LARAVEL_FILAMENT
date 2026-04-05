<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('23810310138_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('23810310138_categories')->cascadeOnDelete();
            $table->string('name');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->decimal('price', 15, 2);
            $table->integer('stock_quantity');
            $table->string('image_path')->nullable();
            $table->enum('status', ['draft', 'published', 'out_of_stock'])->default('draft');
            $table->integer('discount_percent')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('23810310138_products');
    }
};
