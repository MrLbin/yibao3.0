<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('collects', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('uid')->comment('用户id');
			$table->integer('gid')->comment('商品id');
			$table->time('collecttime')->comment('收藏时间');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('collects');
	}
}
