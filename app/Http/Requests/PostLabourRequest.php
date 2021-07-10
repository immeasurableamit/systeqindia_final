<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostLabourRequest extends FormRequest
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
            'category' => 'required',
            'name' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'aadhar_no' => 'required',

        ];
    }

    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array
 */
    public function messages()
    {
        return [
            'aadhar_no.required' => "The aadhar field is required.
",
        ];
    }
}
