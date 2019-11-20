<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public $table = "staffs";
    protected $primaryKey = 'id';

    protected $fillable = ['fname', 'lname', 'address', 'country', 'dob', 'contact1', 'contact2', 'nic_no','passport_no',
    'gender', 'qualification', 'certificates_img', 'is_active', 'body'];
/**
     * Get the Staff that has a Role.
     *
     * a Role has Many Staff, A staff belongs to a role*/
    public function role()
    {
        return $this->belongsTo('App\Role');
    }


    //a staff has one or more Calls (calllog), A call belongsTo staff
     //One to Many Relationship --
    public function callLogs()
        {
            return $this->hasMany('App\CallLog');
        }


//a staff has one user , a user belongs to staff
    public function user()
        {
            return $this->hasOne('App\User');
        }

  //a staff has one more subjects , a subjects has one or more to many Staff
  //many to many
    public function subjects()
        {
            return $this->belongsToMany('App\Subject','staff_subject');// 'staff_subject', 'staff_id', 'subject_id');
        }


}//end bracket



