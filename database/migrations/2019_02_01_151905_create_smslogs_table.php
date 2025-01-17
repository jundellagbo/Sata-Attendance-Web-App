<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmslogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smslogs', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('records');
            $table->longText('room');
            $table->integer('user');
            $table->longText("subject");
            $table->date('date_recorded');
            $table->string("time_recorded");
            $table->integer("roomid");
            $table->integer("subjectid");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('smslogs');
    }
}
