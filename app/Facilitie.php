<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facilitie extends Model
{
    //
    protected $table="facilities";

 	protected $fillable = [
        'faci_slug', 'faci_name', 'faci_image','faci_desc'
    ];
}
