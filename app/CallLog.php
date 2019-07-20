<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CallLog extends Model
{
    //
    //a staff has one or more Calls (calllog), A call belogsTo a staff
    //One to Many Relationship --
    public function staff(){
        return $this->belongsTo('App\staff');

    }

}
