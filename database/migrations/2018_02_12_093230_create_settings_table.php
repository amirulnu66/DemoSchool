<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('scl_name');
            $table->string('scl_email');
            $table->string('scl_phone');
            $table->string('scl_logo');
            $table->string('scl_address');
            $table->text('scl_description');
            $table->string('copyright',255);
            $table->string('institute_info');
            $table->string('holiday_list');
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
        Schema::dropIfExists('settings');
    }
}
