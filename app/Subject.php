<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //
 //a staff has one more subjects , a subjects belogst to many Staff MANY TO MANY RELATIONSHIP
//    public function staffs()
//    {
//        return $this->belongsToMany('App\Staff', 'staff_subject', 'staff_id', 'subject_id');
//    }

}
