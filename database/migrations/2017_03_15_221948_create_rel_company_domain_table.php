<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelCompanyDomainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rel_company_domain', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->length(6)->unsigned()->comment('FK references companies table. The company DNS domain.');
            $table->string('domain')->unique()->comment('The company DNS domain unique name. Works for comparing user email address domains and match them with an existing company.');
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
        Schema::dropIfExists('rel_company_domain');
    }
}
