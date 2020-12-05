<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapelNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapel_nilais', function (Blueprint $table) {
            $table->integer('mapel_id')->unsigned()->index(); // the id of the bear
            $table->foreign('mapel_id')->references('id')->on('mapels');
            $table->integer('nilai_id')->unsigned()->index(); // the id of the picnic that this bear is at
            $table->foreign('nilai_id')->references('id')->on('nilais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mapel_nilais');
    }
}
