<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('dob');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('gender')->nullable();
            $table->biginteger('phonenumber');
            $table->integer('semester');
            $table->string('course');
            $table->string('clgname');
            $table->string('technology')->nullable();
            $table->string('qualification')->nullable();
            $table->string('cover');
            $table->string('avtar');
            $table->string('status')->nullable();
            $table->string('email')->unique();
            $table->integer('role');
            $table->integer('pid');
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
        Schema::dropIfExists('profiles');
    }
}
