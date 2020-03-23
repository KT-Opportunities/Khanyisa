<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDebitOrderAuthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debit_order_auths', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Indi_ID');
            $table->string('AccHolderName');
            $table->string('BankName');
            $table->string('BranchName');
            $table->string('AccNumber');
            $table->string('BranchCode');
            $table->string('Amount');
            $table->string('AccType');
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
        Schema::dropIfExists('debit_order_auths');
    }
}
