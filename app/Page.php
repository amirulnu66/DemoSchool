<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //

    protected $table="page_table";

 	protected $fillable = [
        'history_route', 'page_bgimage', 'page_title','breadcamp','main_image','heading_one','heading_two','paragraph'
    ];


}
