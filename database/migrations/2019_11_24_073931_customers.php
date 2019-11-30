<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Customers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('customers', function (Blueprint $table) {
             $table->bigIncrements('id');
             //$table->bigInteger('totalscore');
             $table->string('phone_number')->unique();
             $table->string('first_name')->nullable();
             $table->string('last_name')->nullable();
             $table->string('birthday')->nullable();
             $table->timestamp('created_at')->nullable();

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
