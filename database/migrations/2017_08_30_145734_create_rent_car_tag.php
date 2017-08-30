<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentCarTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rent_car_tags',function(Blueprint $table){
            $table->increments('id');
            $table->string('iden');
            $table->integer('type_nationality');
            $table->integer('number_days');
            $table->string('request_id');
            $table->float('authorized_amount');
            $table->float('total_rent');
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
        Schema::dropIfExists('rent_car_tags');
    }
}
