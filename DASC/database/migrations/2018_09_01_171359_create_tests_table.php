<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('school_name');
            $table->tinyInteger('educationType');
            $table->tinyInteger('campus');
            $table->timestamps();
        });
    }
    public function enum($column, array $allowed)
         {
             return $this->addColumn('enum', $column, compact('allowed'));
         }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
