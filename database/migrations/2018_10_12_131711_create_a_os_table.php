<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAOsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a_os', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Objet');
            $table->string('Caution_Provisoire');
            $table->string('Type_Annonce');
            $table->string('Prix_Acquisition_Plans');
            $table->time('Date_Limite_Remise_Plans');
            $table->string('PME');
            $table->string('Lieu_Execution');
            $table->string('Contact');
            $table->string('URL_AO');
            $table->string('DCE_Filename');
            $table->string('Estimation');
            $table->string('Categorie');
            $table->string('Procedure');
            $table->string('Reference');
            $table->string('Acheteur');
            $table->boolean('Est_Modifie');
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
        Schema::dropIfExists('a_os');
    }
}
