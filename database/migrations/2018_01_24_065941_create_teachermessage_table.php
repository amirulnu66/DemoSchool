<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachermessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
         Schema::create('teacher_message', function (Blueprint $table) {
            $table->increments('id');
            $table->string('page_route')->unique();
            $table->string('page_bgimage');
            $table->string('page_title');
            $table->string('type');
            $table->string('breadcamp');
            $table->string('heading_one');
            $table->string('paragraph_one');
            $table->string('heading_two');
            $table->string('paragraph_two');
            $table->string('profile_picture');
            $table->string('teacher_info');
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
        Schema::dropIfExists('teacher_message');
    }
}
