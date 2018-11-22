<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('job_title');
            $table->string('address');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->boolean('vip');
            $table->boolean('active');
            $table->string('avatar');
            $table->string('video')->nullable();
            $table->string('zip')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('url')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('referral')->nullable();
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
        Schema::dropIfExists('business');
    }
}
