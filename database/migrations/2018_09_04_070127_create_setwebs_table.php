<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetwebsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('setwebs', function (Blueprint $table) {
			$table->increments('id');
			$table->string('sdesc')->comment('网站描述')->nullable();
			$table->string('sname')->comment('网站名称')->nullable();
			$table->integer('dtel')->comment('联系方式')->nullable();
			$table->string('daddr')->comment('网址')->nullable();
			$table->integer('dnul')->comment('备案号')->nullable();
			$table->string('detial')->comment('版本信息')->nullable();
			$table->integer('status')->comment('状态')->nullable();
			$table->string('logo')->comment('logo')->nullable();
			$table->string('keywords')->comment('关键字')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('setwebs');
	}
}
