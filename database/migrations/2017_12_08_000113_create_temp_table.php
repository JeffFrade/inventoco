<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTempTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp', function (Blueprint $table) {
            $table->string('user');
            $table->string('serial_number');
            $table->string('sector');
            $table->string('room');
            $table->dateTime('date');
            $table->foreign('user')
                ->references('user')
                ->on('user')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('serial_number')
                ->references('serial_number')
                ->on('equipments')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp');
    }
}
