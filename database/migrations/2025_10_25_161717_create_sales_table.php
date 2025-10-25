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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
           $table->string('g_number')->nullable();
            $table->date('date');
            $table->date('last_change_date');
            $table->string('supplier_article');
            $table->string('tech_size');
            $table->bigInteger('barcode')->nullable();
            $table->decimal('total_price');
            $table->integer('discount_percent')->nullable();
            $table->boolean('is_supply');
            $table->boolean('is_realization');
            $table->decimal('promo_code_discount')->nullable();
            $table->string('warehouse_name');
            $table->string('country_name')->nullable();
            $table->string('oblast_okrug_name')->nullable();
            $table->string('region_name')->nullable();
            $table->bigInteger('income_id')->nullable();
            $table->string('sale_id')->nullable();
            $table->string('odid')->nullable();
            $table->string('spp')->nullable();
            $table->decimal('for_pay')->nullable();
            $table->decimal('finished_price')->nullable();
            $table->decimal('price_with_disc')->nullable();
            $table->bigInteger('nm_id')->unique();
            $table->string('subject');
            $table->string('category');
            $table->string('brand');
            $table->boolean('is_storno')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
