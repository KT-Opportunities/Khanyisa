<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBenNomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ben_noms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Indi_ID');
            $table->string('Name');
            $table->string('Surname');
            $table->string('IDNumber');
            $table->string('Relationship');
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
        Schema::dropIfExists('ben_noms');
    }
}
