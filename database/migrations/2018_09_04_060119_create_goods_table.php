<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('goods', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('tid')->comment('商品分类');
			$table->integer('uid')->comment('用户id');
			$table->integer('gnum')->comment('数量');
			$table->string('intro')->comment('描述');
			$table->string('gname')->comment('名称');
			$table->integer('price')->comment('价格');
			$table->string('pic')->comment('图片');
			$table->integer('status')->comment('状态');
			$table->integer('token')->comment('随机数');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('goods');
	}
}
