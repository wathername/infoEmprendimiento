<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonalInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_id')->unsigned()->nullable();
            $table->foreign('type_id')->references('id')->on('types')->onUpdate('cascade');
            $table->string('identification')->nullable();
            $table->string('name');
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->integer('origin_city_id')->unsigned();
            $table->foreign('origin_city_id')->references('id')->on('cities')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('recidency_city_id')->unsigned();
            $table->foreign('recidency_city_id')->references('id')->on('cities')->onDelete('cascade')->onUpdate('cascade');
            $table->text('address')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('statu_id')->unsigned();
            $table->foreign('statu_id')->references('id')->on('status')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('personal_informations');
    }
}
