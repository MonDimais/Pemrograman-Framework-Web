<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('category_id')
                ->constrained('categories')
                ->cascadeOnDelete();

            $table->string('code')->unique();
            $table->string('name');
            $table->string('unit')->default('pcs');
            $table->unsignedBigInteger('price');
            $table->unsignedInteger('stock')->default(0);
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropUnique(['code']);

            $table->dropColumn([
                'category_id',
                'code',
                'name',
                'unit',
                'price',
                'stock',
            ]);
        });
    }
};
