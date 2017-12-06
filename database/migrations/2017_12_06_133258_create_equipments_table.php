<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipments', function (Blueprint $table) {
            $table->string('codebar');
            $table->string('serial_number');
            $table->string('item');
            $table->string('brand', 50);
            $table->string('fabrication_model', 100);
            $table->integer('id_sector')->unsigned();
            $table->integer('id_room')->unsigned();
            $table->integer('id_type')->unsigned();
            $table->timestamps();
            $table->primary(['codebar', 'serial_number']);
            $table->foreign('id_sector')
                ->references('id_sector')
                ->on('sectors')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('id_room')
                ->references('id_room')
                ->on('rooms')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('id_type')
                ->references('id_type')
                ->on('type_equipments')
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
        Schema::dropIfExists('equipment');
    }
}
