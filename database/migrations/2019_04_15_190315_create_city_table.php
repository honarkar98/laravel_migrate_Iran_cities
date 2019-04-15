<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->smallInteger("province_id")->unsigned();
            $table->smallInteger("county_id")->unsigned();
            $table->string('name',50);

            $table->foreign('province_id')->references('id')->on('province');
            $table->foreign('county_id')->references('id')->on('county');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('city');
    }
}
