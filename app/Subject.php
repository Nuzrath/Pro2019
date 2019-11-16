<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //
 //a staff has one more subjects , a subjects has one or more to many Staff
  //many to many
   public function staffs()
   {
       return $this->belongsToMany('App\Staff');// 'staff_subject', 'staff_id', 'subject_id');
   }

//a Course has one more subjects , a subjects has one or more  Course
 //many to many
   public function courses()
   {
       return $this->belongsToMany('App\Course');// 'course_subject', 'course_id', 'subject_id');
   }

}
