<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentGpsLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('student_gps_locations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->references('id')->on('students');
            $table->string('lat');
            $table->string('lng');
            $table->datetime('shared_at');
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
        Schema::drop('student_gps_locations');
    }
}
