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
        Schema::create('payrolls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->nullable()->constrained('employees')->onDelete('cascade')->onUpdate('no action');
            $table->foreignId('transaction_id')->nullable()->constrained('account_transactions')->onDelete('cascade')->onUpdate('no action');
            $table->foreignId('expense_id')->nullable()->constrained('expenses')->onDelete('cascade')->onUpdate('no action');
            $table->foreignId('created_by')->nullable()->constrained('admins')->onDelete('no action')->onUpdate('no action');
            $table->foreignId('updated_by')->nullable()->constrained('admins')->onDelete('no action')->onUpdate('no action');

            $table->string('slug');
            $table->string('salary_month')->nullable();
            $table->string('deduction_reason')->nullable();
            $table->double('deduction_amount', 12, 2)->nullable();
            $table->double('mobile_bill', 12, 2)->nullable();
            $table->double('food_bill', 12, 2)->nullable();
            $table->double('bonus', 12, 2)->nullable();
            $table->double('commission', 12, 2)->nullable();
            $table->double('advance', 12, 2)->nullable();
            $table->double('festival_bonus', 12, 2)->nullable();
            $table->double('travel_allowance', 12, 2)->nullable();
            $table->double('others', 12, 2)->nullable();
            $table->date('salary_date')->nullable();
            $table->string('note')->nullable();
            $table->boolean('status')->nullable()->default(1);
            $table->string('image_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payrolls');
    }
};
