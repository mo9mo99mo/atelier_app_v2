<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_name', 100); //作品タイトル
            $table->string('product_cap', 200)->nullable(); //作品説明
            $table->unsignedBigInteger('product_category_id')->nullable(); //カテゴリID
            $table->foreignId('product_user_id');
            $table->unsignedInteger('product_pub_flg'); //公開非公開フラグ
            $table->unsignedInteger('product_del_flg'); //削除フラグ
            $table->timestamps();
            $table->dateTime('product_delete_at')->nullable(); //削除日
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
