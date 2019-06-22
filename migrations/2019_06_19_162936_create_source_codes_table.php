<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSourceCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('source_codes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('source_code_id')->default(0);
            $table->string('openid', 190);
            $table->string('avatar', 60);
            $table->string('nickname', 60);

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
        Schema::dropIfExists('source_codes');
    }
}
