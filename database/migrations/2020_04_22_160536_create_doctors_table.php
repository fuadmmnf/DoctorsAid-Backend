<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('doctortype_id')->unsigned()->nullable(false);
            $table->string('name')->nullable(false);
            $table->string('bmdc_number')->nullable(false);
            $table->integer('status')->default(0); //0 available, 1 busy, 2 in call
            $table->string('mobile')->nullable(false);
            $table->string('password')->nullable(false);
            $table->timestamps();

            $table->foreign('doctortype_id')->references('id')->on('doctortypes')
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
        Schema::dropIfExists('doctors');
    }
}
