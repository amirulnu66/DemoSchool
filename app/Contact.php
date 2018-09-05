<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //

     protected $table="contact_table";

 	protected $fillable = [
        'contact_slug', 'contact_title', 'con_bgimage','breadcamp','title','summary'
    ];



}
