<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('vendorcode');
            $table->string('vendorname');
            $table->string('address');
            $table->string('tin');
            $table->string('taxability');
            $table->string('yearsinbusiness');
            $table->string('country');
            $table->string('contact');
            $table->string('number');
            $table->string('faxnumber');
            $table->string('owner');
            $table->string('email address');
            $table->string('formsofbusiness');
            $table->string('natureofbusiness');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendors');
    }
}
