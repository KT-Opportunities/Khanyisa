<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtendedFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extended_families', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Indi_ID');
            $table->string('Name');
            $table->string('IDNumber');
            $table->string('RepatriationPre');
            $table->string('UMNGCWABO');
            $table->string('CoverAmount');
            $table->string('Premium');
            $table->string('TotalPremium');
            $table->string('TotalEXPremium');
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
        Schema::dropIfExists('extended_families');
    }
}
