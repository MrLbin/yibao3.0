<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGkindsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('gkinds', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('pid')->comment('父类id');
			$table->string('tname')->comment('分类名称');
			$table->string('path')->comment('分类路径');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('gkinds');
	}
}
