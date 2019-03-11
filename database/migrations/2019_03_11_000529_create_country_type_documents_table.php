<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountryTypeDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_type_documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('country_id');
            $table->string('code' , 10);
            $table->string('description' , 100);
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
        Schema::dropIfExists('country_type_documents');
    }
}
