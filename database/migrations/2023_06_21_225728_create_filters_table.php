<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiltersTable extends Migration
{
    public function up()
    {
        Schema::create('filters', function (Blueprint $table) {
            $table->id();
            $table->longText('title')->nullable();
            $table->boolean('active')->default(true);
            $table->json('options')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('filters');
    }
}