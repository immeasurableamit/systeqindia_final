<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FounderMessageRequest extends FormRequest
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
            'description' => 'required',
            'founder_message_image' => 'required_without:job|mimes:png,jpg,jpeg',
        ];
    }
}
