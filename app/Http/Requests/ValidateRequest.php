<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRequest extends FormRequest
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
            'fname'=>'required | max:10',
            'lname'=>'required | max:10',
            'cnic'=>'required |  digits:13 |unique:register_students,cnic',
            'semester'=>'required',
            'email'=>'required | unique:register_students,email'

        ];
    }
    public function messages()
    {
        return [
//            'fname.required'=>'First Name to Dal na Bahi',
//            'fname.max'=>'Bahi 10 sa Zyada nai dalny ka',
//            'lname.required'=>'Last Name to Dal na Bahi',
//            'lname.max'=>'Bahi 10 sa Zyada nai dalny ka',
//            'cnic.required'=>'Cnic kon Daly ga rey Bahi',
//            'cnic.digits'=>'Bahi Cnic main 12digits hoty hain',

        ];
    }
}
