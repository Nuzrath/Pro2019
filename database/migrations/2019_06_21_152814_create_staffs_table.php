<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->increments('staff_id')->index()->unique()->autoIncrement();
			$table->string('fname')->default('M');
			$table->string('lname')->default('lal');
			$table->string('address')->nullable();
			$table->string('country')->default('Sri Lanka');
			$table->date('dob')->default('1992.05.03');
			$table->integer('contact1');
			$table->integer('contact2')->nullable();
			$table->string('nic_no')->default('5555555555V');
			$table->string('passport_no')->nullable();
			$table->string('gender');
			$table->string('email')->unique();
			$table->string('qualification')->default('dip in english');
			$table->string('certificates_img')->nullable();
			$table->integer('is_active')->nullable()->default(0);//1 is active 0 is not active
			$table->string('staff_pic')->nullable();
			$table->integer('role_id')->index()->unsigned();

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
        Schema::dropIfExists('staffs');
    }
}
