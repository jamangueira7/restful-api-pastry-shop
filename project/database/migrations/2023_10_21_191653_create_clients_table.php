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
        Schema::create('clients', function (Blueprint $table) {
            $table->uuid('id')->primary()->autoIncrement();
            $table->string('name', 200);
            $table->string('email', 250)->unique();
            $table->string('phone',11);
            $table->date('birthday')->nullable();
            $table->string('address',200);
            $table->string('complement', 100);
            $table->string('neighborhood', 150);
            $table->string('zipcode', 9);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
