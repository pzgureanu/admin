<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('meta_title');
            $table->string('meta_description');
            $table->longText('body');
            $table->timestamps();
        });

        Schema::table('pages', function (Blueprint $table) {
            $table->unsignedBigInteger('id_language')->nullable();
            $table->foreign('id_language')->references('id')->on('languages');
        });
    }


    public function down()
    {
        Schema::dropIfExists('pages');
    }
}