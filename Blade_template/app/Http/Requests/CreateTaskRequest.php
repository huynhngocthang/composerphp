<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTaskRequest extends FormRequest
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
            'inputTitle' => 'required|min:3',
            'inputContent' => 'required|min:3',
            'inputFile' => 'nullable|image:jpg,png,jpeg',
        ];
    }

    public function message() {
        return [
            'inputTitle.required' => 'Tasktitle không được bỏ trống',
            'inputTitle.min' => 'Tasktitle ít nhất 3 kí tự trở lên',
            'inputContent.required' => 'Content không được bỏ trống',
            'inputContent.min' => 'Content ít nhất 3 kí tự trở lên',
            'inputFile.nullable' => 'image hộ trợ cho jpg, png, jpeg' ,
        ] ;

        // return $messages ;
    }
}
