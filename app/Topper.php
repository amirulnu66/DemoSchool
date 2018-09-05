<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topper extends Model
{
    //
    protected $table="toppers";

 	protected $fillable = [
         'st_name', 'st_class', 'st_roll','st_section','st_image','status'
    ];
}
