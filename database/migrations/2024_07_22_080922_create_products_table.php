<?php

use App\Enums\ProductStockStatus;
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
            $table->string('sku')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->boolean('featured')->default(false);
            $table->text('description')->nullable();
            $table->decimal('price', 15)->default(0);
            $table->boolean('managed_stock')->default(false);
            $table->integer('stock_quantity')->default(0);
            $table->string('stock_status')->default(ProductStockStatus::IN_STOCK);
            $table->text('purchase_note')->nullable();
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
