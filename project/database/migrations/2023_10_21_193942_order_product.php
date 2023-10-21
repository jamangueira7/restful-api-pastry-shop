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
        Schema::create('order_product', function (Blueprint $table) {
            $table->uuid('order_id');
            $table->uuid('product_id');
            $table->primary(['order_id', 'product_id']);
            $table->timestamps();

            $table->foreign('order_id')
                ->references('id')
                ->on('orders');

            $table->foreign('product_id')
                ->references('id')
                ->on('products');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
