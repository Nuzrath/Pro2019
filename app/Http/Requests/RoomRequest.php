<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
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
            'class_name'=>'required',
            'no_of_seat'=>'required',
            'no_of_computer'=>'required',
            'types_of_class'=>'nullable',
            'availability'=>'required',
            'remark'=>'nullable',


            // $table->increments('id');
            // $table->string('class_name');
            // $table->integer('no_of_seat');
            // $table->integer('no_of_computer');
            // $table->string('types_of_class')->nullable();//group class, or individual
            // $table->integer('availability')->default('1');//1= available, 0 = not availabel
            // $table->string('remark')->nullable();
            // $table->timestamps();`

        ];
    }
}
