<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('name');
            $table->string('adp')->unique();
            $table->string('nt_login')->unique();
            $table->string('email')->unique();
            $table->string('rol');
            $table->string('position');
            $table->string('photo');
            $table->string('users_status');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('users',function(Blueprint $table)
        {
            $table->unsignedInteger('campaing_id');

            $table->foreign('campaing_id')->references('id_campaing')->on('campaing')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
