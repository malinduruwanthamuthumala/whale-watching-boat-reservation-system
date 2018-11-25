<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Invoice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('invoiceid');
            $table->string('boatid');
            $table->string('boatownerid');
            $table->string('reservationid');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('NIC');
            $table->string('NOofseats');
            $table->string('payementstatus');
            $table->string('price');
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
        //
    }
}
