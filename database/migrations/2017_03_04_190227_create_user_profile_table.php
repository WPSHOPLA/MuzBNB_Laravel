<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userProfile', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('preferred_lang')->nullable();
            $table->string('preferred_currency')->nullable();
            $table->string('location')->nullable();
            $table->text('self_description')->nullable();
            $table->string('timezone')->nullable();
            $table->text('emergency_contact')->nullable();
            $table->text('shipping_address')->nullable();
            $table->string('avatar')->nullable();
            $table->string('profile_video')->nullable();
            $table->string('gender');
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
        Schema::dropIfExists('userProfile');
    }
}
