<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->nullable();
            $table->string('web_side')->nullable();
            $table->string('economic_activity')->nullable();
            $table->integer('personal_information_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('statu_id')->unsigned()->nullable();
            $table->integer('matter_id')->unsigned()->nullable();
            $table->foreign('personal_information_id')->references('id')->on('personal_informations')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('statu_id')->references('id')->on('status')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('matter_id')->references('id')->on('matters')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('company_datas');
    }
}
