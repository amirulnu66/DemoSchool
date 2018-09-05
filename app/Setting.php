<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //
    protected $table="settings";

 	protected $fillable = [
        'scl_name', 'scl_email', 'scl_phone','scl_logo','scl_address','scl_description','copyright','institute_info','holiday_list'
    ];
}
