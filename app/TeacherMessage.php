<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherMessage extends Model
{
    //

	protected $table="teacher_message";

 	protected $fillable = [
        'page_route', 'page_bgimage', 'page_title','breadcamp','heading_one','paragraph_one','heading_two','paragraph_two','profile_picture','teacher_info','type'
    ];

}
