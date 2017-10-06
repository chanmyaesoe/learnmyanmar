<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVotesToCityinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cityinfo', function (Blueprint $table) {
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
            $table->integer('divisionID')->nullable();
            //$table->renameColumn('divisionID', 'divisionor_state_id');
            $table->string('name')->nullable();
            $table->integer('famousplacesID')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cityinfo', function (Blueprint $table) {
            //$table->dropColumn('votes');
        });
    }
}
