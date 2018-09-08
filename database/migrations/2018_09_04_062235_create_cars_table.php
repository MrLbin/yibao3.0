<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('cars', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('uid')->comment('用户id');
			$table->integer('gid')->comment('商品id');
			$table->integer('num')->comment('商品数量');
			$table->integer('youxiao')->comment('是否有效');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('cars');
	}
}
