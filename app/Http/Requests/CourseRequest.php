<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;



class CourseRequest extends FormRequest
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
            //

            'course_id'=>'required',
            'course_name'=>'required',
            'course_fee'=>'required',
            'duration'=>'nullable',
            'admission_fee'=>'required',


            // $table->increments('id');
            // $table->String('course_id')->index()->unique();
            // $table->string('course_name');
            // $table->decimal('course_fee',8,2);
            // $table->string('duration');  //4 month, 12 Days,..etc
            // $table->decimal('admission_fee',8,2); //should create a seprate table???
            // $table->timestamps();
        ];
    }
}
