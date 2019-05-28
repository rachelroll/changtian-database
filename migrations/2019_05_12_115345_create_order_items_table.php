<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedInteger('order_id')->default(0)->comment('�������');
            $table->unsignedInteger('good_id')->default(0)->comment('��ƷID');
            $table->string('name')->default('')->comment('��Ʒ����');
            $table->string('price')->default('')->comment('��Ʒ����');
            $table->unsignedInteger('quantity')->default(0)->comment('��������');

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
        Schema::dropIfExists('order_items');
    }
}
