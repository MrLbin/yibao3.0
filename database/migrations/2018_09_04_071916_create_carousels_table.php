<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarouselsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('carousels', function (Blueprint $table) {
			$table->increments('id');
			$table->string('img_one')->comment('轮播图1');
			$table->string('url_one')->comment('跳转地址1');
			$table->string('img_two')->comment('轮播图2');
			$table->string('url_two')->comment('跳转地址2');
			$table->string('img_three')->comment('轮播图3');
			$table->string('url_three')->comment('跳转地址3');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('carousels');
	}
}
