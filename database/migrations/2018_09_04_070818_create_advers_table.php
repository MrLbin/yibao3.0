<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdversTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('advers', function (Blueprint $table) {
			$table->increments('id');
			$table->string('atitle')->comment('标题');
			$table->integer('aprice')->comment('价格');
			$table->string('acustomer')->comment('客户信息');
			$table->integer('data_max')->comment('有效时间_最大');
			$table->integer('data_min')->comment('有效时间_最小');
			$table->string('guanggaowei1')->comment('广告1信息');
			$table->string('aurl1')->comment('广告1地址');
			$table->string('guanggaowei2')->comment('广告2信息');
			$table->string('aurl2')->comment('广告2地址');
			$table->integer('cate')->comment('广告状态');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('advers');
	}
}
