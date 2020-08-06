<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdonatoriCrediteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordonatori', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('regiune');
            $table->unsignedInteger('judet');
            $table->unsignedInteger('localitate');
            $table->unsignedInteger('tip');
            $table->string('denumire', 100);
            $table->unsignedInteger('actinfiintare');
            $table->date('datainfiintare');
            $table->unsignedInteger('status');
            $table->unsignedInteger('act');

            $table->foreign('regiune')->references('id')->on('regiuni')->onDelete('cascade');
            $table->foreign('judet')->references('id')->on('judete')->onDelete('cascade');
            $table->foreign('localitate')->references('id')->on('localitati')->onDelete('cascade');
            $table->foreign('tip')->references('id')->on('tipordonator')->onDelete('cascade');
            $table->foreign('status')->references('id')->on('statusordonatori')->onDelete('cascade');
            $table->foreign('act')->references('id')->on('tipacte')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ordonatori', function (Blueprint $table){
            $table->dropForeign('ordonatori_regiune_foreign');
            $table->dropForeign('ordonatori_judet_foreign');
            $table->dropForeign('ordonatori_localitate_foreign');
            $table->dropForeign('ordonatori_tip_foreign');
            $table->dropForeign('ordonatori_status_foreign');
            $table->dropForeign('ordonatori_tip_foreign');
        });
        Schema::dropIfExists('ordonatori');
    }
}
