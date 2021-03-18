<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors_documents', function (Blueprint $table) {
            $table->id();
            $table->string('companyprofile');
            $table->string('lafs');
            $table->string('iso');
            $table->string('gdp');
            $table->string('gmp');
            $table->string('lto');
            $table->string('pol');
            $table->string('listofproducts');
            $table->string('listofvendorssuppliers');
            $table->string('listofclients');
            $table->string('adr');
            $table->string('bir');
            $table->string('sec');
            $table->string('mayorspermit');
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
        Schema::dropIfExists('vendors_documents');
    }
}
