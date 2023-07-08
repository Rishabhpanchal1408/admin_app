<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StudentTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_tbl', function (Blueprint $table) {
            $table->id('id');
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->string('gender', 255);
            $table->string('number', 10, 0);
            $table->string('hobby', 255);
            $table->string('address', 255);
            $table->string('profile_photo', 255);
            $table->string('password', 255);
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
