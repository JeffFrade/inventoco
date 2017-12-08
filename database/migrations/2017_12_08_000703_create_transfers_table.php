<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->string('old_sector', 50);
            $table->string('new_sector', 50);
            $table->dateTime('date');
            $table->string('user');
            $table->string('serial_number');
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
        Schema::dropIfExists('transfers');
    }
}
