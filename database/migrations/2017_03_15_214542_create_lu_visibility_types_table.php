<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLuVisibilityTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lu_visibility_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('benefits', function (Blueprint $table) {
            $table->dropForeign('benefits_visibility_id_foreign');
            $table->dropColumn('visibility_id');
        });
        Schema::dropIfExists('lu_visibility_types');
    }
}
