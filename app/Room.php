<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $fillable = [
        'class_name', 'no_of_seat', 'no_of_computer', 'type_of_class', 'availability', 'Remark'
    ];

}
