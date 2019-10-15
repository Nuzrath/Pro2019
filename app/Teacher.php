<?php

namespace App;
use App\Staff;
use App\Subject;


use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    public $table = "staff_subject";
    protected $primaryKey = 'id';

    public function Staff()
    {
        return $this->belongsTo('App\Staff');
    }

    public function subjects()
    {
        return $this->belongsToMany('App\Subject');
        // 'staff_subject', 'staff_id', 'subject_id');
    }

}
