<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_teos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('upazila_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('profile_deo_id')->unsigned()->nullable();
            $table->string('about')->nullable();
            $table->timestamps();

            $table->foreign('upazila_id')->references('id')->on('upazilas')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('profile_deo_id')->references('id')->on('profile_deos')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_teos');
    }
}