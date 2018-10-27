<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('school_name');
            $table->string('location');
            $table->tinyInteger('education_type');
            $table->boolean('campus');
            $table->string('school_student');
            $table->string('school_teacher');
            $table->string('school_classroom');
            $table->boolean('version');
            $table->boolean('science_lab');
            $table->boolean('computer_lab');
            $table->string('total_computer');
            $table->boolean('computer_teacher');
            $table->boolean('library');
            $table->boolean('toilet');
            $table->boolean('mpo_occupied');
            $table->tinyInteger('publication_status');
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
        Schema::dropIfExists('school_details');
    }
}
