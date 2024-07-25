<?php

use App\Enums\OrderStatus;
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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->text('customer_note')->nullable();
            $table->ipAddress('customer_ip_address')->nullable();
            $table->text('customer_user_agent')->nullable();
            $table->decimal('subtotal', 15);
            $table->decimal('total', 15);
            $table->string('status')->default(OrderStatus::UNPAID);
            $table->json('billing')->nullable();
            $table->json('shipping')->nullable();
            $table->json('items')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
