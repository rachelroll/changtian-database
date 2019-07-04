<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaylogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paylogs', function (Blueprint $table) {
            $table->bigIncrements('id');

            // ��������ҵ����Ƶ��ֶ�
            $table->integer('order_id')->default(0)->comment('����id');
            // ���¾���΢��֧�����֪ͨ�ӿڷ��ص��ֶ�
            $table->string('appid', 255)->default('')->comment('΢�ŷ���Ĺ����˺�ID');
            $table->string('mch_id', 255)->default('')->comment('΢��֧��������̻���');
            $table->string('bank_type', 16)->default('')->comment('��������');
            $table->integer('cash_fee')->default(0)->comment('�ֽ�֧�����');
            $table->string('fee_type', 8)->default('')->comment('��������');
            $table->string('is_subscribe', 1)->default('')->comment('�Ƿ��ע�����˺�');
            $table->string('nonce_str', 32)->default('')->comment('����ַ���');
            $table->string('openid', 128)->default('')->comment('�û���ʶ');
            $table->string('out_trade_no', 32)->default('')->comment('�̻�ϵͳ�ڲ�������');
            $table->string('result_code', 16)->default('')->comment('ҵ����');
            $table->string('return_code', 16)->default('')->comment('ͨ�ű�ʶ');
            $table->string('sign', 32)->default('')->comment('ǩ��');
            $table->string('prepay_id', 64)->default('')->comment('΢�����ɵ�Ԥ֧���ػ���ʶ�����ں����ӿڵ�����ʹ�ã���ֵ��Ч��Ϊ2Сʱ');
            $table->dateTime('time_end')->nullable()->comment('֧�����ʱ��');
            $table->integer('total_fee')->default(0)->comment('�������');
            $table->string('trade_type', 16)->default('')->comment('��������');
            $table->string('transaction_id', 32)->default('')->comment('΢��֧��������');
            $table->string('err_code', 32)->default('')->comment('�������');
            $table->string('err_code_des', 128)->default('')->comment('�����������');
            $table->string('device_info', 32)->default('')->comment('�豸��');
            $table->text('attach')->nullable()->comment('�̼����ݰ�');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paylogs');
    }
}
