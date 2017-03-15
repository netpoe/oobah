<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelUserBenefitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rel_user_benefit', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->length(6)->unsigned()->comment('FK references users table. This user has this benefit.');
            $table->integer('benefit_id')->length(6)->unsigned()->comment('FK references benefits table. This benefit belongs to the user_id.');
            $table->integer('stock_per_user')->length(3)->unsigned()->default(0)->comment('Number of times this benefit can be used by this user.');
            $table->timestamp('expiration_per_user')->default(null)->nullable()->comment('The benefit can expire for a user before the benefit itself expires.');
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
        Schema::dropIfExists('rel_user_benefit');
    }
}
