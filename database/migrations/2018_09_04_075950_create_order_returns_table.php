<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderReturnsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('order_returns', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('returns_no')->comment('退货编号');
			$table->integer('ordere_id')->comment('订单编号');
			$table->integer('express_no')->comment('物流单号');
			$table->string('consignee_realname')->comment('收货人姓名');
			$table->string('consignee_address')->comment('收货地址');
			$table->integer('consignee_zip')->comment('邮政编码');
			$table->integer('orderlogistics_status')->comment('物流状态');
			$table->string('orderlogistics_intro')->comment('物流描述');
			$table->integer('returns_type')->comment('退货类型');
			$table->integer('returns_amount')->comment('退款金额');
			$table->time('returns_submit_time')->comment('退货申请时间');
			$table->time('handling_time')->comment('退货处理时间');
			$table->string('returns_contont')->comment('退货原因');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('order_returns');
	}
}
