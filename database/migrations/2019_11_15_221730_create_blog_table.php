<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration
{

    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nazov_univerzity');
            $table->string('autor');
            $table->string('email');
            $table->string('studijny_odbor');

            $table->date('zaciatok');
            $table->date('koniec');

            $table->mediumText('strucny_popis');

            $table->longText('priprava_pobytu');
            $table->longText('studium');
            $table->longText('dalsi_text')->nullable();

            $table->string('image');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('blog');
    }
}