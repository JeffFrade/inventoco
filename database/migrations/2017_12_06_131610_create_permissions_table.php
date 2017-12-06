<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->integer('id_level')->unsigned();
            $table->integer('id_action')->unsigned();
            $table->foreign('id_level')
            ->references('id_level')
            ->on('levels')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('id_action')
            ->references('id_action')
            ->on('actions')
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
        Schema::dropIfExists('permissions');
    }
}
