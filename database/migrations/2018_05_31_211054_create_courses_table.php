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
            $table->integer('classroom_id')->unsigned()->nullable();
            $table->integer('professor_id')->unsigned();
            $table->timestamps();

            $table->unique(['period_id', 'hour_id', 'professor_id']);
            $table->unique(['period_id', 'hour_id', 'classroom_id']);
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
