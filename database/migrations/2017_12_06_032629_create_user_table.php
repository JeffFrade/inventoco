<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->string('user');
            $table->string('name', 100);
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('id_level')->unsigned();
            $table->foreign('id_level')
                ->references('id_level')
                ->on('levels')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->primary('user');
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
        Schema::dropIfExists('user');
    }
}
