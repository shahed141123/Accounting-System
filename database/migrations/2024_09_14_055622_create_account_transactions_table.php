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
        Schema::create('account_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('reason')->nullable();
            $table->string('slug')->nullable();
            $table->double('amount', 12, 2);
            $table->boolean('type')->comment('0 is Debit and 1 is Credit');
            $table->string('cheque_no')->nullable();
            $table->string('receipt_no')->nullable();
            $table->dateTime('transaction_date', 0);
            $table->string('note')->nullable();
            $table->string('status')->default('active')->comment('inactive,active');
            $table->foreignId('account_id')->nullable()->constrained('accounts')->onDelete('cascade')->onUpdate('no action');
            $table->foreignId('created_by')->nullable()->constrained('admins')->onDelete('no action')->onUpdate('no action');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_transactions');
    }
};
