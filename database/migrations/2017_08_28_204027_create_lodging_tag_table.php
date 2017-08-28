<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLodgingTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lodging_tags',function(Blueprint $table){
            $table->increments('id');
            $table->string('iden');
            $table->string('request_id');
            $table->integer('type_nationality');
            $table->integer('number_nights');
            $table->float('unit_cost');
            $table->integer('number_rooms');
            $table->float('total_cost');
            $table->float('naci_checks')->nullable();
            $table->float('naci_debit')->nullable();
            $table->float('naci_credit')->nullable();
            $table->float('naci_cash')->nullable();
            $table->float('naci_amex')->nullable();
            $table->float('extra_checks')->nullable();
            $table->float('extra_debit')->nullable();
            $table->float('extra_credi')->nullable();
            $table->float('extra_cash')->nullable();
            $table->float('extra_amex')->nullable();
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
        Schema::dropIfExists('lodging_tags');
    }
}
