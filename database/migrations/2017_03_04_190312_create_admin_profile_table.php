<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminProfile', function (Blueprint $table) {
            $table->increments('id');
            $table->string('admin_id');
            $table->string('gender');
            $table->string('designation');
            $table->string('preferred_lang')->nullable();
            $table->string('preferred_currency')->nullable();
            $table->string('location')->nullable();
            $table->text('self_description')->nullable();
            $table->string('timezone')->nullable();
            $table->text('emergency_contact')->nullable();
            $table->string('avatar')->nullable();
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
        Schema::dropIfExists('adminProfile');
    }
}
