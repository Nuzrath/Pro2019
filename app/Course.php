<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable = [
        'course_id',
        'course_name',
        'course_fee',
        'duration'];

 //a Course has one more subjects , a subjects has one or more  Course
 //many to many
 public function subjects()
 {
     return $this->belongsToMany('App\Subject');// 'course_subject', 'course_id', 'subject_id');
 }
}
