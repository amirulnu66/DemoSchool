<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //

     protected $table="members";

 	protected $fillable = [
        'name_slug','member_desi', 'member_name', 'member_image','member_desc','position'
    ];

}
