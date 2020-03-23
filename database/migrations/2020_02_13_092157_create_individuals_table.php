<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndividualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individuals', function (Blueprint $table) {
            $table->increments('Indi_ID');
            $table->string('ApplicationType');
            $table->string('SchemeOption');
            $table->string('Region');
            $table->string('CellNumber');
            $table->string('Email');
            $table->string('MainRegion');
            $table->string('MainStation');
            $table->string('MainDepartment');
            $table->string('MainSurname');
            $table->string('MainName');
            $table->string('MainIDNumber');
            $table->string('MainAge');
            $table->string('MainUMNGCWABO');
            $table->string('MainCellNumber');
            $table->string('MainWorkNumber');
            $table->string('MainPremium');
            $table->string('MainEmail');
            $table->string('SapuNumber');
            $table->string('PostalAdd');
            $table->string('Residential');


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
        Schema::dropIfExists('individuals');
    }
}
