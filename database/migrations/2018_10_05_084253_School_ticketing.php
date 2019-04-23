<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SchoolTicketing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_tickets',function( Blueprint $table ){

            $table->increments('id');

            $table->string('ticket_number',16);

            $table->string('school_name',100);

            $table->string('school_teacher_name',100);

            $table->string('status',1);

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
        Schema::dropIfExists('school_tickets');
    }
}
