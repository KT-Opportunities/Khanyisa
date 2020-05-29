<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Indi_ID');
            $table->string('Name');
            $table->string('Surname');
            $table->string('Rank');
            $table->string('Station');
            $table->string('IDNumber');
            $table->string('PerNumber');
            $table->string('Amount');
            $table->string('StartDate');
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
        Schema::dropIfExists('pre_payments');
    }
}
