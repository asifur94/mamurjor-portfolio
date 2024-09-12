<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpertisesTable extends Migration
{
    public function up()
    {
        Schema::create('expertises', function (Blueprint $table) {
            $table->id();
            $table->string('icon');
            $table->string('title');
            $table->text('description');
        });
    }

    public function down()
    {
        Schema::dropIfExists('expertises');
    }
}

