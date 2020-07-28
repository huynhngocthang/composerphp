<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormExampleRequest extends FormRequest
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
            'name'=>'required|min:2|max:20',
            'email'=>'required|unique:customer|max:20',
        ];
    }

    public function message() {
        return [
            'name.required' => 'name không được bỏ trống',
            'name.min'=>'Name size must be between 2 and 30!',
            'name.max'=>'Name size must be between 2 and 30!',
            'email.required'=>'A email is required',
            'email.max'=>'Email size must be between 2 and 30!',
        ] ;
    }
}
