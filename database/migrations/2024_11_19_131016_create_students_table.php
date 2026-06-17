<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateStudentsTable extends Migration
{
 /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_name');
            $table->string('contact');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('dob');
            $table->enum('gender', ["male", "female", "other"])->nullable();
            $table->string('college');
            $table->string('course');
            $table->string('branch');
            $table->string('semester');
            $table->string('photo')->nullable();
            $table->string('role')->default('student');
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
        Schema::dropIfExists('students');
    }



}