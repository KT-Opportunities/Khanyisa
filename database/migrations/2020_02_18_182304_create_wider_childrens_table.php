<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWiderChildrensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wider_childrens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Indi_ID');
            
            $table->string('Name');
            $table->string('IDNumber');
            
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
        Schema::dropIfExists('wider_childrens');
    }
}
