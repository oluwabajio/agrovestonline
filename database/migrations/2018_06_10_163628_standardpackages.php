<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Standardpackages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('standard_packages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('age');
            $table->string('category');
            $table->mediumText('question1');
            $table->mediumText('answer1');
            $table->mediumText('question2');
            $table->mediumText('answer2');
            $table->mediumText('question3');
            $table->mediumText('answer3');
            $table->mediumText('question4');
            $table->mediumText('answer4');
            $table->mediumText('question5');
            $table->mediumText('answer5');
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
        //
    }
}
