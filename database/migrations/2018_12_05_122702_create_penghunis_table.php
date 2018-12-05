<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenghunisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penghunis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->string('email', 30)->nullable();
            $table->string('phone', 15);
            $table->text('address');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });

        Schema::create('kendaraans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->text('engine_number');
            $table->string('license_plate', 10);
            $table->string('color', 10)->nullable();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });

        Schema::create('kepemilikan', function (Blueprint $table) {
            $table->increments('id')->unsigned();;
            $table->integer('id_penghuni')->unsigned();
            $table->integer('id_vehicle')->unsigned();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->foreign('id_penghuni')->references('id')->on('penghunis')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_vehicle')->references('id')->on('kendaraans')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kepemilikan');
        Schema::dropIfExists('penghunis');
        Schema::dropIfExists('kendaraans');
    }
}
