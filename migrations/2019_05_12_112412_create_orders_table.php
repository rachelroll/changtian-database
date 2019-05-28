<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->decimal('amount')->default(0)->comment('�����ܽ��');
            $table->string('username')->default('')->comment('�ͻ�����');
            $table->string('contact')->default('')->comment('�ͻ���ϵ��ʽ');
            $table->string('address')->default('')->comment('�ʼĵ�ַ');
            $table->string('comments')->default('')->comment('��ע');

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
        Schema::dropIfExists('orders');
    }
}
