<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('age');
            $table->string('email');
            $table->string('imageOne');
            $table->string('imageTwo');
            $table->string('imageThree');
            $table->json('questionTwo');
            $table->string('questionThree');
            $table->json('questionFour');
            $table->json('questionFive');
            $table->string('questionSix');
            $table->string('questionSeven');
            $table->string('questionEight');
            $table->json('questionNine');
            $table->string('questionTen');
            $table->string('questionEleven');
            $table->string('questionExtra');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assessments');
    }
}
