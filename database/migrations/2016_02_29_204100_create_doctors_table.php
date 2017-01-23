<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name',30);
            $table->string('last_name',30);
            $table->bigInteger('phone')->unique();
            $table->bigInteger('mobile')->unique();
            $table->string('email',60)->unique();
            $table->string('street',60);
            $table->string('city',60);
            $table->string('state',60);
            $table->integer('pincode');
            $table->string('username',30)->unique();
            $table->string('password', 60);
            $table->string('clinic_name',60);
            $table->string('clinic_address');
            $table->string('time_slot');
            $table->string('speciality',60);
            $table->integer('fee');
            $table->string('reg_number',60);
            $table->rememberToken();
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
        Schema::drop('doctors');
    }
}
