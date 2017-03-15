<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FkRelUserBenefitContstraints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rel_user_benefit', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('benefit_id')->references('id')->on('benefits');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rel_user_benefit', function (Blueprint $table) {
            //
        });
    }
}
