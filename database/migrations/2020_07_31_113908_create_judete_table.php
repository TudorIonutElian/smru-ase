<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJudeteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judete', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('regiune');
            $table->string('indicativ', 2);
            $table->string('denumire', 25);
            $table->integer('resedinta')->nullable();
            $table->unsignedInteger('locuitori')->nullable();

            $table->foreign('regiune')->references('id')->on('regiuni')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('judete', function (Blueprint $table){
            $table->dropForeign('judete_regiune_foreign');
        });
        Schema::dropIfExists('judete');
    }
}
