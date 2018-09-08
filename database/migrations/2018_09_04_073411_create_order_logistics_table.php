<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderLogisticsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('order_logistics', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('ordernum')->comment('订单编号');
			$table->integer('express')->comment('物流单号');
			$table->string('urname')->comment('收货人姓名');
			$table->integer('uphone')->comment('联系电话');
			$table->string('uadres')->comment('收货地址');
			$table->integer('consignee')->comment('邮政编码');
			$table->integer('logistics')->comment('物流发货运费');
			$table->integer('orderlogistics')->comment('物流状态');
			$table->integer('logistics_result_last')->comment('物流最后状态描述');
			$table->string('logistics_result')->comment('物流描述');
			$table->time('logistics_create_time')->comment('发货时间');
			$table->time('logistics_update_time')->comment('物流更新时间');
			$table->time('logistics_settlement_time')->comment('物流结算时间');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('order_logistics');
	}
}
