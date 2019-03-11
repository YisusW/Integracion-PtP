<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountryPaymentMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_payment_methods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('country_id');
            $table->string('code' , 15);
            $table->string('description' , 70);
            $table->foreign('country_id')->references('id')->on('country');
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
        Schema::dropIfExists('country_payment_methods');
    }
}
