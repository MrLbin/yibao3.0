<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('addresses', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name')->comment('收货人');
			$table->integer('phone')->comment('收货手机号');
			$table->string('address')->comment('收货地址')->nullable();
			$table->integer('is_default')->comment('是否默认')->default(0);
			$table->integer('uid')->comment('用户id')->nullable();
			$table->string('province')->comment('省')->nullable();
			$table->string('city')->comment('市')->nullable();
			$table->string('area')->comment('地区')->nullable();
			$table->string('street')->comment('详细地址')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('addresses');
	}
}
