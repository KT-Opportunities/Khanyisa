<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncomeBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('income_benefits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Indi_ID');
            $table->string('BPM');
            $table->string('BPMpre');
            $table->string('OPBenfit');
            $table->string('OPcover');
            $table->string('OPpre');
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
        Schema::dropIfExists('income_benefits');
    }
}
