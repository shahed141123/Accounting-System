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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->double('asset_cost', 12, 2);
            $table->boolean('depreciation')->nullable()->default(0);
            $table->boolean('depreciation_type')->nullable()->default(0);
            $table->double('salvage_value', 12, 2)->nullable();
            $table->double('useful_life', 5, 2)->nullable();
            $table->double('daily_depreciation', 12, 2)->nullable();
            $table->string('note')->nullable();
            $table->string('image_path')->nullable();
            $table->date('date')->nullable();
            $table->date('expire_date')->nullable();
            $table->string('status')->default('active')->comment('inactive,active');
            $table->foreignId('cat_id')->nullable()->constrained('asset_types')->onDelete('cascade')->onUpdate('no action');
            $table->foreignId('created_by')->nullable()->constrained('admins')->onDelete('no action')->onUpdate('no action');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
