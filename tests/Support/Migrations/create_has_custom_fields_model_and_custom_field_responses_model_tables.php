<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHasCustomFieldsModelAndCustomFieldResponsesModelTables extends Migration
{
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('survey_responses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('surveys');
        Schema::dropIfExists('survey_responses');
    }
}
