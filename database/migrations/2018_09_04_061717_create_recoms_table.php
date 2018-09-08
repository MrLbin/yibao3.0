<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecomsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('recoms', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('uid')->comment('用户id');
			$table->integer('gid')->comment('商品id');
			$table->integer('start')->comment('星级');
			$table->integer('content')->comment('评论内容');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('recoms');
	}
}
