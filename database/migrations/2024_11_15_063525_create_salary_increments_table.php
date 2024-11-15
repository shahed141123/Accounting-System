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
        Schema::create('salary_increments', function (Blueprint $table) {
            $table->id();
            $table->string('reason');
            $table->string('slug');
            $table->double('increment_amount', 12, 2)->nullable();
            $table->date('increment_date')->nullable();
            $table->string('note')->nullable();
            $table->boolean('status')->nullable()->default(1);
            $table->timestamps();
            $table->unsignedBigInteger('empolyee_id');
            $table->unsignedBigInteger('created_by');

            $table->foreign('empolyee_id')->references('id')->on('employees')->onDelete('cascade')->onUpdate('no action');
            $table->foreign('created_by')->references('id')->on('admins')->onDelete('no action')->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salary_increments');
    }
};
