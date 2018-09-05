<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sports extends Model
{
    //

	  protected $table="sports";

 	protected $fillable = [
        'sports_slug', 'sports_title', 'sports_name', 'sports_desc','sports_image'
    ];

}
