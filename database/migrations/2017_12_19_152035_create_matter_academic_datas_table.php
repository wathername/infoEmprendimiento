<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMatterAcademicDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matter_academic_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('academic_data_id')->unsigned();
            $table->integer('matter_id')->unsigned();
            $table->foreign('academic_data_id')->references('id')->on('academic_datas')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('matter_academic_datas');
    }
}
