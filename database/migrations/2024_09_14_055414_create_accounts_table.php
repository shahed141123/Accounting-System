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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('bank_name');
            $table->string('branch_name')->nullable();
            $table->string('account_number');
            $table->string('slug');
            $table->date('date')->nullable();
            $table->string('note')->nullable();
            $table->string('status')->default('active')->comment('inactive,active');
            $table->foreignId('created_by')->nullable()->constrained('admins')->onDelete('no action')->onUpdate('no action');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
