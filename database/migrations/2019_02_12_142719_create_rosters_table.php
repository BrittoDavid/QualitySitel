<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRostersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roster', function (Blueprint $table) {
            $table->integer('adp_agent');
            $table->string('name_agent');
            $table->string('email_agent')->unique();
        });

        Schema::table('roster',function(Blueprint $table)
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
        Schema::dropIfExists('roster');
    }
}
