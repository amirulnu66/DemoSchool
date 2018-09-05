<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('page_table', function (Blueprint $table) {
            $table->increments('id');
            $table->string('history_route')->unique();
            $table->string('page_bgimage');
            $table->string('page_title');
            $table->string('breadcamp');
            $table->string('main_image');
            $table->string('heading_one');
            $table->string('heading_two');
            $table->longText('paragraph');
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
        Schema::dropIfExists('page_table');
    }
    
}
