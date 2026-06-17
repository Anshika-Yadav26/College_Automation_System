<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_feedback', function (Blueprint $table) {
            $table->id('serialNo');
            $table->string('FirstName',100);
            $table->string('LastName',100);
            $table->string('Email',100);
            $table->string('PhoneNumber',100);
            $table->enum('Rating', ['Worst','Bad','Good','Better','Excellent']);
            $table->string('Feedback',255);
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
        Schema::dropIfExists('_feedback');
    }
}
