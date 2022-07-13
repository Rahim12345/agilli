<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UpdateCategoryRequest extends FormRequest
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
    public function rules(Request $request)
    {
        return [
            'name_az'=>[
                'nullable',
                'max:255',
                Rule::unique('categories','name_az')->where(function ($query) use ($request) {
                    return $query->where('id','!=',$request->segment('3'));
                })
            ],
            'name_en'=>[
                'nullable',
                'max:255',
                Rule::unique('categories','name_en')->where(function ($query) use ($request) {
                    return $query->where('id','!=',$request->segment('3'));
                })
            ],
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
