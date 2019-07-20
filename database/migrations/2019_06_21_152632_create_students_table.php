<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('std_id')->unique()->autoincrements();
			$table->string('fname');
			$table->string('lname');
			$table->text('address');
			$table->string('city');
			$table->string('country')->default('Sri Lanka');
			$table->date('dob')->default('1992.05.03');
			$table->integer('contact1');
			$table->integer('contact2')->nullable();
			$table->string('nic')->nullable();//nic no or Passport no
			$table->string('gender');
			$table->string('email')->nullable();
			$table->integer('is_active')->default('0');//1= active, 0 = not active

            // $table->integer('course_id')->unsigned();
            // $table->foreign('course_id')->references('id')->on('courses');

			// $table->integer('role_id')->index()->nullable()->unsigned();
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
