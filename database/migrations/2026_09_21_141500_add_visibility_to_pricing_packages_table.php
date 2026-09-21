<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pricing_packages', function (Blueprint $table) {
            $table->boolean('is_hidden')->default(false)->after('sort_order');
            $table->boolean('hide_price')->default(false)->after('is_hidden');
        });
    }

    public function down(): void
    {
        Schema::table('pricing_packages', function (Blueprint $table) {
            $table->dropColumn(['is_hidden', 'hide_price']);
        });
    }
};
