<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sendmessage extends Model
{
    //

     protected $table="sendmessages";

 	protected $fillable = [
        'name', 'email', 'message'
    ];
}
