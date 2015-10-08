<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hires', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('emp_no');
            $table->string('firstname');
            $table->string('lastname');
            $table->integer('department_id');
            $table->string('position');
            $table->date('startdate');
            $table->string('location');
            $table->integer('status');
            $table->string('email');
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
        Schema::drop('hires');
    }
}
