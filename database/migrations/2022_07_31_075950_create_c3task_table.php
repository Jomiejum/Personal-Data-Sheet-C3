<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateC3taskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sheets', function (Blueprint $table) {
            $table->increments('id');
            // VI
            $table->string('vworgnameAddress1', 64)->nullable();
            $table->date('vworgdateFrom1')->nullable();
            $table->date('vworgdateTo1')->nullable();
            $table->integer('vworgnumHours1')->nullable();
            $table->string('vwPosition1', 64)->nullable();

            $table->string('vworgnameAddress2', 64)->nullable();
            $table->date('vworgdateFrom2')->nullable();
            $table->date('vworgdateTo2')->nullable();
            $table->integer('vworgnumHours2')->nullable();
            $table->string('vwPosition2', 64)->nullable();

            $table->string('vworgnameAddress3', 64)->nullable();
            $table->date('vworgdateFrom3')->nullable();
            $table->date('vworgdateTo3')->nullable();
            $table->integer('vworgnumHours3')->nullable();
            $table->string('vwPosition3', 64)->nullable();

            $table->string('vworgnameAddress4', 64)->nullable();
            $table->date('vworgdateFrom4')->nullable();
            $table->date('vworgdateTo4')->nullable();
            $table->integer('vworgnumHours4')->nullable();
            $table->string('vwPosition4', 64)->nullable();

            $table->string('vworgnameAddress5', 64)->nullable();
            $table->date('vworgdateFrom5')->nullable();
            $table->date('vworgdateTo5')->nullable();
            $table->integer('vworgnumHours5')->nullable();
            $table->string('vwPosition5', 64)->nullable();

            $table->string('vworgnameAddress6', 64)->nullable();
            $table->date('vworgdateFrom6')->nullable();
            $table->date('vworgdateTo6')->nullable();
            $table->integer('vworgnumHours6')->nullable();
            $table->string('vwPosition6', 64)->nullable();

            $table->string('vworgnameAddress7', 64)->nullable();
            $table->date('vworgdateFrom7')->nullable();
            $table->date('vworgdateTo7')->nullable();
            $table->integer('vworgnumHours7')->nullable();
            $table->string('vwPosition7', 64)->nullable();

            $table->string('vworgnameAddress8', 64)->nullable();
            $table->date('vworgdateFrom8')->nullable();
            $table->date('vworgdateTo8')->nullable();
            $table->integer('vworgnumHours8')->nullable();
            $table->string('vwPosition8', 64)->nullable();

            $table->string('vworgnameAddress9', 64)->nullable();
            $table->date('vworgdateFrom9')->nullable();
            $table->date('vworgdateTo9')->nullable();
            $table->integer('vworgnumHours9')->nullable();
            $table->string('vwPosition9', 64)->nullable();

            $table->string('vworgnameAddress10', 64)->nullable();
            $table->date('vworgdateFrom10')->nullable();
            $table->date('vworgdateTo10')->nullable();
            $table->integer('vworgnumHours10')->nullable();
            $table->string('vwPosition10', 64)->nullable();


            // VII
            $table->string('ldorgnameAddress1', 64)->nullable();
            $table->date('ldorgdateFrom1')->nullable();
            $table->date('ldorgdateTo1')->nullable();
            $table->integer('ldorgnumHours1')->nullable();
            $table->string('ldtype1', 64)->nullable();
            $table->string('ldorgnameSponsor1', 64)->nullable();

            $table->string('ldorgnameAddress2', 64)->nullable();
            $table->date('ldorgdateFrom2')->nullable();
            $table->date('ldorgdateTo2')->nullable();
            $table->integer('ldorgnumHours2')->nullable();
            $table->string('ldtype2', 64)->nullable();
            $table->string('ldorgnameSponsor2', 64)->nullable();

            $table->string('ldorgnameAddress3', 64)->nullable();
            $table->date('ldorgdateFrom3')->nullable();
            $table->date('ldorgdateTo3')->nullable();
            $table->integer('ldorgnumHours3')->nullable();
            $table->string('ldtype3', 64)->nullable();
            $table->string('ldorgnameSponsor3', 64)->nullable();

            $table->string('ldorgnameAddress4', 64)->nullable();
            $table->date('ldorgdateFrom4')->nullable();
            $table->date('ldorgdateTo4')->nullable();
            $table->integer('ldorgnumHours4')->nullable();
            $table->string('ldtype4', 64)->nullable();
            $table->string('ldorgnameSponsor4', 64)->nullable();

            $table->string('ldorgnameAddress5', 64)->nullable();
            $table->date('ldorgdateFrom5')->nullable();
            $table->date('ldorgdateTo5')->nullable();
            $table->integer('ldorgnumHours5')->nullable();
            $table->string('ldtype5', 64)->nullable();
            $table->string('ldorgnameSponsor5', 64)->nullable();

            $table->string('ldorgnameAddress6', 64)->nullable();
            $table->date('ldorgdateFrom6')->nullable();
            $table->date('ldorgdateTo6')->nullable();
            $table->integer('ldorgnumHours6')->nullable();
            $table->string('ldtype6', 64)->nullable();
            $table->string('ldorgnameSponsor6', 64)->nullable();

            $table->string('ldorgnameAddress7', 64)->nullable();
            $table->date('ldorgdateFrom7')->nullable();
            $table->date('ldorgdateTo7')->nullable();
            $table->integer('ldorgnumHours7')->nullable();
            $table->string('ldtype7', 64)->nullable();
            $table->string('ldorgnameSponsor7', 64)->nullable();

            $table->string('ldorgnameAddress8', 64)->nullable();
            $table->date('ldorgdateFrom8')->nullable();
            $table->date('ldorgdateTo8')->nullable();
            $table->integer('ldorgnumHours8')->nullable();
            $table->string('ldtype8', 64)->nullable();
            $table->string('ldorgnameSponsor8', 64)->nullable();

            // VIII
            $table->string('otherorgnameSkill1', 64)->nullable();
            $table->string('otherorgnameDistinct1', 64)->nullable();
            $table->string('otherorgnameMembership1', 64)->nullable();

            $table->string('otherorgnameSkill2', 64)->nullable();
            $table->string('otherorgnameDistinct2', 64)->nullable();
            $table->string('otherorgnameMembership2', 64)->nullable();

            $table->string('otherorgnameSkill3', 64)->nullable();
            $table->string('otherorgnameDistinct3', 64)->nullable();
            $table->string('otherorgnameMembership3', 64)->nullable();

            $table->string('otherorgnameSkill4', 64)->nullable();
            $table->string('otherorgnameDistinct4', 64)->nullable();
            $table->string('otherorgnameMembership4', 64)->nullable();

            $table->string('otherorgnameSkill5', 64)->nullable();
            $table->string('otherorgnameDistinct5', 64)->nullable();
            $table->string('otherorgnameMembership5', 64)->nullable();

            $table->string('otherorgnameSkill6', 64)->nullable();
            $table->string('otherorgnameDistinct6', 64)->nullable();
            $table->string('otherorgnameMembership6', 64)->nullable();
            // end of input
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
        Schema::dropIfExists('sheet');
    }
}
