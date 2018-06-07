<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('period_id')->unsigned();
            $table->integer('language_id')->unsigned();
            $table->integer('level');
            $table->integer('hour_id')->unsigned();
            $table->string('group');
            $table->integer('classroom_id')->unsigned()->nullable();
            $table->integer('professor_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('period_id')->references('id')->on('periods')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('hour_id')->references('id')->on('hours')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('classroom_id')->references('id')->on('classrooms')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('professor_id')->references('id')->on('professors')->onDelete('cascade')->onUpdate('cascade');

            $table->unique(['period_id', 'hour_id', 'professor_id']);
            $table->unique(['period_id', 'hour_id', 'classroom_id']);
            $table->unique(['period_id', 'group']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
