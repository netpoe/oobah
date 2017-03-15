<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('name');
            $table->string('paternal_lastname');
            $table->string('maternal_lastname');
            $table->string('mobile_number', 20);
            $table->string('password');
            $table->integer('company_id')->length(4)->unsigned()->default(null)->nullable()->comment('FK references companies table. The company where the user belongs to.');
            $table->integer('role_id')->length(2)->unsigned()->default(null)->nullable()->comment('FK references lu_user_roles table. The role assigned to the user.');
            $table->timestamp('email_verification_date');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
