<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOptionRequest extends FormRequest
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
            'unvan_az'=>'required|max:255',
            'unvan_en'=>'required|max:255',
            'email'=>'required|max:255',
            'tel'=>'required|max:255',

        ];
    }

    public function attributes()
    {
        return [
            'unvan_az'=>'Ünvan(AZ)',
            'unvan_en'=>'Ünvan(EN)',
            'email'=>'Email',
            'tel'=>'Telefon',
        ];
    }
}


