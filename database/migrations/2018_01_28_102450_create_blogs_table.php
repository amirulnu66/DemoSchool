<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('blog_table', function (Blueprint $table) {
            $table->increments('id');
            $table->string('blog_slug')->unique();
            $table->string('blog_title');
            $table->string('blog_image');
            $table->string('date_picker');
            $table->string('title');
            $table->string('blog_desc',512);
            
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
        Schema::dropIfExists('blog_table');
    }
}
