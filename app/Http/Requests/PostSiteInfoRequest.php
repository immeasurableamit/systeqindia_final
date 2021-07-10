<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostSiteInfoRequest extends FormRequest
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
            'short_description' => 'required',
            'copyright' => 'required',
            'address' => 'required',
            'address_map' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ];
    }

    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array
 */
    public function messages()
    {
        return [];
    }
}
