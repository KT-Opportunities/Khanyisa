<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTotalPreCalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('total_pre_cals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Indi_ID');
            $table->string('TotalFamily');
            $table->string('WiderChildren');
            $table->string('ExFamily');
            $table->string('IncomeCon');
            $table->string('Airtime');
            $table->string('CarHire');
            $table->string('GrandTotal');
            
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
        Schema::dropIfExists('total_pre_cals');
    }
}
