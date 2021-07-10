<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostTeamRequest extends FormRequest
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
            'name' => 'required',
            'job' => 'required',
            'image' => 'required', 'dime nsions:min_width=250,min_height=500',
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
            'image.required' => "You must use the 'Choose file' button to select which file you wish to upload",
        ];
    }
}
