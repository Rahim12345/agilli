<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'category_id'=>'required|exists:categories,id',
            'alt_az'=>'nullable|max:255',
            'alt_en'=>'nullable|max:255',
            'title_1_az'=>'nullable|max:255',
            'title_1_en'=>'nullable|max:255',
            'title_2_az'=>'nullable|max:255',
            'title_2_en'=>'nullable|max:255',
            'text_az'=>'nullable|max:10000',
            'text_en'=>'nullable|max:10000',
            'release_date_az'=>'nullable|max:255',
            'release_date_en'=>'nullable|max:255',
            'client_az'=>'nullable|max:255',
            'client_en'=>'nullable|max:255',
            'art_director_az'=>'nullable|max:255',
            'art_director_en'=>'nullable|max:255',
            'designer_az'=>'nullable|max:255',
            'designer_en'=>'nullable|max:255',
            'copyrighter_az'=>'nullable|max:255',
            'copyrighter_en'=>'nullable|max:255',
            'images'=>'nullable',
            'images.*'=>'nullable|image',
        ];
    }

    public function attributes()
    {
        return [
            'cover'=>'Cover',
            'category_id'=>'Category',
            'title_1_az'=>'Title 1(AZ)',
            'title_1_en'=>'Title 1(EN)',
            'title_2_az'=>'Title 2(AZ)',
            'title_2_en'=>'Title 2(EN)',
            'text_az'=>'Text (AZ)',
            'text_en'=>'Text (EN)',
            'release_date_az'=>'Release date (AZ)',
            'release_date_en'=>'Release date (EN)',
            'client_az'=>'Client (AZ)',
            'client_en'=>'Client (EN)',
            'art_director_az'=>'Art director (AZ)',
            'art_director_en'=>'Art director (EN)',
            'designer_az'=>'Designer (AZ)',
            'designer_en'=>'Designer (EN)',
            'copyrighter_az'=>'Copyrighter (AZ)',
            'copyrighter_en'=>'Copyrighter (EN)',
            'images'=>'Images',
            'images.*'=>'Images',
        ];
    }
}
