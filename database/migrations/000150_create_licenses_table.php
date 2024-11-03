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
        Schema::create('licenses', function (Blueprint $table) {
            $table->id();
            // Thêm cột license_category_id
            $table->foreignId('license_category_id')
                ->nullable()
                ->constrained('license_categories')
                ->nullOnDelete();

            $table->string('license_key')->unique();
            $table->string('product_name')->nullable();
            $table->string('customer_phone', 10)->nullable();
            $table->string('customer_email', 60)->nullable();
            $table->text('description')->nullable();
            $table->date('expiry_date')->comment('Ngày hết hạn');
            $table->boolean('is_active')
                ->default(true)
                ->comment('Trạng thái kích hoạt');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licenses');
    }
};
