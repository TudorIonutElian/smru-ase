<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acte', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tip');
            $table->string('denumire');
            $table->date('data');


            $table->foreign('tip')->references('id')->on('tipuriacte')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('acte', function (Blueprint $table){
            $table->dropForeign('acte_tip_foreign');
        });
        Schema::dropIfExists('acte');
    }
}
