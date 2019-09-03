<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //vqlidation reference - https://laravel.com/docs/5.7/validation#introduction

        'fname'=>'required',
		'lname'=>'required',
		'address'=>'required',
		'country'=>'required',
		'dob'=>'required',
		'contact1'=>'required|numeric|min:10',
		'contact2'=>'nullable',
		'nic_no'=>'required',
		'passport_no'=>'nullable',
		'gender'=>'required',
        'email'=>'required',
        'qualification'=>'nullable',
        'certificates_img'=>'nullable',
        'is_active'=>'nullable',
        'staff_pic'=>'nullable',
        'role_id'=>'required',




        ];
    }
}
