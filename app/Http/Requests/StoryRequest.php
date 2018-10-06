<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoryRequest extends FormRequest
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
            'title'=>'required',
            'img'=>'required|image|min:50|max:200',
            'content'=>'required|min:1000|max:3000',
        ];
    }
    public function messages()
    {
        return [
            'img.image'=>'Incorrect formatting image.'
        ];
    }
}
