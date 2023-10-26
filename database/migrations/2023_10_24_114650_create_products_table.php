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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // 自動増分ID
            $table->string('name'); // 商品名
            $table->text('description')->nullable(); // 商品の説明（NULL許容）
            $table->decimal('price', 10, 2); // 価格（小数点2桁まで）
            $table->integer('stock_quantity'); // 在庫数量（整数）
            $table->timestamps(); // 作成日時と更新日時
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
