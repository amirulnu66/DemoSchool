<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaqModel extends Model
{
    //

     protected $table="faqs";

 	protected $fillable = [
        'qus_name', 'qus_ans', 'sort_list','position'
    ];

}
