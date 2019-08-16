<?php

namespace App;
use App\User;
use Auth;


use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $table = "roles";
    protected $primaryKey = 'id';

	protected $fillable = [
        'name',
    ];
/**
     * Get the Staff that has a Role.
     *
     * a Role has Many Staff, A staff belongs to a role*/
	public function staffs(){
		return $this->hasMany('App\Staff');
    }



}
