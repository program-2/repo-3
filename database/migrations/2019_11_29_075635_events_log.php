<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EventsLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('events_log', function (Blueprint $table) {
          $table->bigIncrements('id');
          //$table->foreign('id')->references('id')->on('customers');
          $table->string('phone');
          $table->string('event_name')->nullable();
          $table->string('event_id')->nullable();
          $table->bigInteger('score');
          $table->timestamp('created_at')->nullable();
          $table->timestamp('updated_at')->nullable();

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
