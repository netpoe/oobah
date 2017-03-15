<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelCompanyBenefitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rel_company_benefit', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->length(6)->unsigned()->comment('FK references companies table. This company has this benefit.');
            $table->integer('benefit_id')->length(6)->unsigned()->comment('FK references benefits table. This benefit belongs to the company_id.');
            $table->integer('is_active')->length(1)->unsigned()->comment('Flag. Determines if the benefit is internally active for the company users.');
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
        Schema::dropIfExists('rel_company_benefit');
    }
}
