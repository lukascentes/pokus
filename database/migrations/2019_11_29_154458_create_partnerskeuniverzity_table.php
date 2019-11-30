<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnerskeuniverzityTable extends Migration
{

    public function up()
    {
        Schema::create('partnerskeuniverzity', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stat');
            $table->string('nazov');
            $table->mediumText('adresa');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('partnerskeuniverzity');
    }
}
