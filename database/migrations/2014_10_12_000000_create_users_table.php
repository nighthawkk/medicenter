<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name',30);
            $table->string('last_name',30);
            $table->string('firm_name',60)->unique();
            $table->string('licence_number')->unique();
            $table->bigInteger('phone_number')->unique();
            $table->bigInteger('mobile_number')->unique();
            $table->string('email')->unique();
            $table->string('street',60);
            $table->string('city',60);
            $table->string('state',60);
            $table->integer('pincode');
            $table->string('username')->unique();
            $table->string('password', 60);
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
        Schema::drop('users');
    }
}
