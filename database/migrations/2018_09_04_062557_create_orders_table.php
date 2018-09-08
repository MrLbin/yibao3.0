<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('orders', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('uid')->comment('用户id');
			$table->string('uname')->comment('用户名称');
			$table->integer('gid')->comment('商品id');
			$table->string('gname')->comment('商品名称');
			$table->string('uadress')->comment('收货地址');
			$table->integer('wlmoney')->comment('运费');
			$table->time('ptime')->comment('支付时间');
			$table->time('stime')->comment('发货时间');
			$table->integer('money')->comment('单价');
			$table->integer('totalmoney')->comment('总价');
			$table->string('content')->comment('描述');
			$table->integer('otime')->comment('下单时间');
			$table->integer('wlid')->comment('订单编号');
			$table->integer('uphone')->comment('收货人联系方式');
			$table->string('utname')->comment('收货人姓名');
			$table->integer('is_out')->comment('是否退货');
			$table->integer('status')->comment('状态');
			$table->integer('gnum')->comment('商品数量');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('orders');
	}
}
