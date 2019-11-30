<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniverzityTable extends Migration
{

    public function up()
    {
        Schema::create('univerzity', function (Blueprint $table) {
            $table->increments('id');

            $table->string('stat');
            $table->string('typ');
            $table->string('popis');
            $table->date('datum');

            $table->mediumText('zakladne_info');

            $table->string('vyhlasenie_kde');
            $table->string('vyhlasenie_kedy');
            $table->string('vyhlasenie_prianie');
            $table->string('vyhlasenie_kto');
            $table->longText('vyhlasenie');

            $table->longText('pred_odjazdom');
            $table->longText('po_navrate');

            $table->mediumText('mapa');

            $table->string('image');
            $table->string('image_detail');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('univerzity');
    }
}
