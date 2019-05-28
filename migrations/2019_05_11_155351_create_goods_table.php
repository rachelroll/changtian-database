<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name')->default('')->comment('��Ʒ����');
            $table->string('intro')->default('')->comment('��Ʒ���');
            $table->string('kind')->default('')->comment('Ʒ��');
            $table->string('shipping_date')->default('')->comment('��������');
            $table->string('shipping_place')->default('')->comment('������');
            $table->decimal('price')->default(0)->comment('����');
            $table->string('pictures')->default('')->comment('��ƷͼƬ');
            $table->string('category_id')->default(0)->comment('���� ID');

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
        Schema::dropIfExists('goods');
    }
}
