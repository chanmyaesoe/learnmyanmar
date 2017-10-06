<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamousplaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('famousplace', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('cityinfo_id')->nullable();
            $table->string('img')->nullable();
            $table->text('description')->nullable();
            $table->float('lat')->nullable();
            $table->float('long')->nullable();
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
        Schema::dropIfExists('famousplace');
    }
}
