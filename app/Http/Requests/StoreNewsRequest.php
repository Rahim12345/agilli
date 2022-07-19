<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsRequest extends FormRequest
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
            'cover'=>'nullable|image',
            'cover_alt_az'=>'nullable|max:255',
            'cover_alt_en'=>'nullable|max:255',
            'image_1_alt_az'=>'nullable|max:255',
            'image_1_alt_en'=>'nullable|max:255',
            'image_2_alt_az'=>'nullable|max:255',
            'image_2_alt_en'=>'nullable|max:255',
            'title_az'=>'nullable|max:255',
            'title_en'=>'nullable|max:255',
            'author_az'=>'nullable|max:255',
            'author_en'=>'nullable|max:255',
            'release_date_az'=>'nullable|max:255',
            'release_date_en'=>'nullable|max:255',
            'text_1_az'=>'nullable|max:60000',
            'text_1_en'=>'nullable|max:60000',
            'image_1'=>'nullable|image',
            'text_2_az'=>'nullable|max:60000',
            'text_2_en'=>'nullable|max:60000',
            'image_2'=>'nullable|image',
        ];
    }

    public function attributes()
    {
        return [
            'cover'=>'Cover',
            'title_az'=>'Title (AZ)',
            'title_en'=>'Title 1(EN)',
            'author_az'=>'Author (AZ)',
            'author_en'=>'Author (EN)',
            'release_date_az'=>'Release date (AZ)',
            'release_date_en'=>'Release date (EN)',
            'text_1_az'=>'Text 1 (AZ)',
            'text_1_en'=>'Text 1 (EN)',
            'image_1'=>'Image 1',
            'text_2_az'=>'Text 2 (AZ)',
            'text_2_en'=>'Text 2 (EN)',
            'image_2'=>'Image 2',
        ];
    }
}
