<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labels',function (Blueprint $table){
            $table->increments('id');
            $table->string('iden');
            $table->string('img')->nullable();
            $table->string('name');
            $table->string('description');
            $table->double('national_maximum_deductible_amount');
            $table->double('foreign_maximum_deductible_amount');
            $table->double('national_company_policies');
            $table->double('foreign_company_policies');
            $table->boolean('active')->default(1);
            $table->string('user_id');
            $table->string('business_id');
            $table->enum('type_label', array('predeterminadas', 'corporativas','personalizadas'))->default('predeterminadas');
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
        Schema::dropIfExists('labels');
    }
}
