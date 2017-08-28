<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests',function(Blueprint $table){
            $table->increments('id');
            $table->string('iden');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('departure_hour');
            $table->string('hour_return');
            $table->string('initial_destination');
            $table->string('final_destination');
            $table->integer('days');
            $table->integer('project_id');
            $table->integer('subproject_id');
            $table->integer('travel_id');
            $table->string('user_id');
            $table->string('status')->default(1);
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
        Schema::dropIfExists('requests');
    }
}
