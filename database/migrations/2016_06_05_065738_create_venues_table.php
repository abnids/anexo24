<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index();
            $table->string('name'); 
            $table->string('adress');
            $table->string('rfc');
            $table->string('rnim');
            $table->string('curp');
            $table->string('prosec');
            $table->string('ppc');
            $table->string('noprogram');
            $table->string('email');
            $table->string('activity');
            $table->string('immex');
            $table->string('intermaquilas');
            $table->string('productsToimport');
            $table->string('division');
            $table->string('businesstype');
            $table->softDeletes();
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
        Schema::drop('venues');
    }
}
