<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('upazilla_id')->unsigned();

            $table->string('name')->nullable(false);
            $table->string('mobile')->nullable(false);
            $table->string('device_id');
            $table->string('password')->nullable(false);
            $table->timestamps();

            $table->foreign('upazilla_id')->references('id')->on('upazillas')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
