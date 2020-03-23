<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnChildernsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('own_childerns', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Indi_ID');
            $table->string('Surname');
            $table->string('Name');
            $table->string('IDNumber');
            $table->string('UMNGCWABO');
            $table->string('Premium');
            $table->string('TotalPremium');
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
        Schema::dropIfExists('own_childerns');
    }
}
