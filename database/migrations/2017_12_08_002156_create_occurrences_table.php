<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOccurrencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occurrences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 50);
            $table->string('description', 2000);
            $table->string('status', 100);
            $table->string('serial_number');
            $table->integer('id_criticality')->unsigned();
            $table->integer('id_type')->unsigned();
            $table->string('user');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('serial_number')
                ->references('serial_number')
                ->on('equipments')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('id_criticality')
                ->references('id_criticality')
                ->on('criticalities')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('id_type')
                ->references('id_type')
                ->on('type_occurrences')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('user')
                ->references('user')
                ->on('user')
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
        Schema::dropIfExists('occurrences');
    }
}
