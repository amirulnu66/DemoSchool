<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('contact_table', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contact_slug')->unique();
            $table->string('contact_title');
            $table->string('con_bgimage');
            $table->string('breadcamp');
            $table->string('title');
            $table->string('summary');
            
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
        Schema::dropIfExists('contact_table');
    }
}
