<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    //

    protected $table="sliders";

 	protected $fillable = [
        'slide_text', 'date_picker','position','slide_image'
    ];

}
