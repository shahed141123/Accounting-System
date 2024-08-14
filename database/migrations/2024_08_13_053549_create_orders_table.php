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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('SET NULL');
            $table->foreignId('shipping_id')->nullable()->constrained('shipping_methods')->onDelete('SET NULL');
            $table->float('sub_total');
            $table->float('coupon')->nullable();
            $table->float('discount')->nullable(); // Added for order-level discounts
            $table->float('total_amount');
            $table->integer('quantity');
            $table->string('payment_method')->default('cod');
            $table->enum('payment_status', ['paid', 'unpaid', 'pending', 'failed'])->default('unpaid'); // Added more payment statuses
            $table->enum('status', ['new', 'processing', 'shipped', 'delivered', 'cancelled', 'returned'])->default('new'); // Updated order statuses
            $table->foreign('shipping_id')->references('id')->on('shipping_methods')->onDelete('SET NULL');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->string('country');
            $table->string('post_code')->nullable();
            $table->text('address1');
            $table->text('address2')->nullable();
            $table->text('special_instructions')->nullable(); // Added for special instructions
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
