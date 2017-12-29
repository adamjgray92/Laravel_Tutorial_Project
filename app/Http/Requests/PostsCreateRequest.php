<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostsCreateRequest extends FormRequest
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
            'title'         =>'required',
            'body'          =>'required',
            //'category_id'   =>'required',
            'photo_id'      =>'required'
        ];
    }

    public function messages(){
        return [
            //'category_id.required'=>'Please select a category for this post'
        ];
    }
}