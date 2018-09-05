<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Downloads extends Model
{
    //
    protected $table="downloads";

 	protected $fillable = [
        'title', 'date_picker', 'import_file','position'
    ];

}
