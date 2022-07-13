<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'name_az'=>'nullable|max:255|unique:categories,name_az',
            'name_en'=>'nullable|max:255|unique:categories,name_en',
        ];
    }

    public function attributes()
    {
        return [
            'name_az'=>'Name(AZ)',
            'name_en'=>'Name(EN)',
        ];
    }
}
