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
        Schema::table('shop_products', function (Blueprint $table) {
            $table->dateTime('test_datetime_1')->nullable();
            $table->dateTime('test_datetime_2')->nullable();
            $table->dateTime('test_datetime_3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shop_products', function (Blueprint $table) {
            $table->dropColumn('test_datetime_1')->nullable();
            $table->dropColumn('test_datetime_2')->nullable();
            $table->dropColumn('test_datetime_3')->nullable();
        });
    }
};
