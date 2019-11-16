<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseSubject extends Model
{
    //
    protected $fillable = [
        'course_id', 'subject_id',
    ];
}
