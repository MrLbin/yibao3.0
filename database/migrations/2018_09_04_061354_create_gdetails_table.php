<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGdetailsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('gdetails', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('gid')->comment('商品id');
			$table->string('conten')->comment('描述');
			$table->string('gpic')->comment('图片');
			$table->integer('token')->comment('随机');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('gdetails');
	}
}
