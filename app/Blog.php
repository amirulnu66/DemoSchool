<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //

     protected $table="blog_table";

 	protected $fillable = [
        'blog_slug', 'blog_title', 'blog_image','date_picker','title','blog_desc'
    ];
    
}
