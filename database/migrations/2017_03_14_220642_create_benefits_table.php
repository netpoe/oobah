<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benefits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('The name of the benefit given by the user');
            $table->string('short_description', 350)->comment('A 350 char excerpt for the benefit');
            $table->string('long_description', 3000)->comment('HTML body of the benefit description, like Kickstarter posts.');
            $table->integer('user_id')->length(9)->unsigned()->default(null)->nullable()->comment('FK references users table. Created by this user');
            $table->integer('category_id')->length(2)->unsigned()->default(null)->nullable()->comment('FK references lu_benefits_categories table. Determines the benefit category.');
            $table->integer('visibility_id')->length(1)->unsigned()->default(null)->nullable()->comment('FK references lu_visibility_types. Determines if a benefit is internal or public');
            $table->integer('region_id')->length(3)->unsigned()->default(null)->nullable()->comment('FK references the lu_region where the benefit must be displayed');
            $table->integer('credit_id')->length(3)->unsigned()->default(null)->nullable()->comment('FK references the lu_credit table. Determines the credit value of the benefit');
            $table->integer('is_active')->length(1)->unsigned()->default(0)->comment('Flag. Determines whether a benefit is an active benefit and if it is displayed in the public catalogues');
            $table->integer('is_restricted')->length(1)->unsigned()->default(0)->comment('Flag. Determines if a benefit is restrcited to certain users, in this case it will use the user_benefit_relationship table');
            $table->integer('stock')->length(6)->unsigned()->default(0)->comment('0 means infinite. -1 means out-of-stock. Determines the amount of benefits available in total');
            $table->timestamp('expiration_date')->nullable()->default(null)->comment('Determines the expiration date of the benefit defined by the user');
            $table->timestamp('scheduled_at_date')->nullable()->default(null)->comment('Determines the date when the benefit must be activated.');
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
        Schema::dropIfExists('benefits');
    }
}
