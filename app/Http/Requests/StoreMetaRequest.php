<?php

namespace App\Http\Requests;

use App\Rules\MetaRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreMetaRequest extends FormRequest
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
            'menus'=>['required', Rule::in(['main_page', 'about_page', 'works_page', 'news_page', 'contact_page'])],
            'name_title_az'=>['nullable','max:100'],
            'name_title_en'=>['nullable','max:100'],
            'name_description_az'=>['nullable','max:100'],
            'name_description_en'=>['nullable','max:100'],
            'property_og_site_name_az'=>['nullable','max:100'],
            'property_og_site_name_en'=>['nullable','max:100'],
            'property_og_url_az'=>['nullable','max:100'],
            'property_og_url_en'=>['nullable','max:100'],
            'property_og_title_az'=>['nullable','max:100'],
            'property_og_title_en'=>['nullable','max:100'],
            'property_og_description_az'=>['nullable','max:100'],
            'property_og_description_en'=>['nullable','max:100'],
            'property_twitter_url_az'=>['nullable','max:100'],
            'property_twitter_url_en'=>['nullable','max:100'],
            'property_twitter_title_az'=>['nullable','max:100'],
            'property_twitter_title_en'=>['nullable','max:100'],
            'property_twitter_description_az'=>['nullable','max:100'],
            'property_twitter_description_en'=>['nullable','max:100'],
        ];
    }

    public function messages()
    {
        return [
            'name_title_az.max'=>'<meta name="title" content=" Maksimum 100 simvol ola bilər ">',
            'name_title_en.max'=>'<meta name="title" content=" Maksimum 100 simvol ola bilər ">',

            'name_description_az.max'=>'<meta name="description" content=" Maksimum 100 simvol ola bilər ">',
            'name_description_en.max'=>'<meta name="description" content=" Maksimum 100 simvol ola bilər ">',

            'property_og_site_name_az.max'=>'<meta property="og:site_name" content=" Maksimum 100 simvol ola bilər ">',
            'property_og_site_name_en.max'=>'<meta property="og:site_name" content=" Maksimum 100 simvol ola bilər ">',

            'property_og_url_az.max'=>'<meta property="og:url" content=" Maksimum 100 simvol ola bilər ">',
            'property_og_url_en.max'=>'<meta property="og:url" content=" Maksimum 100 simvol ola bilər ">',

            'property_og_title_az.max'=>'<meta property="og:title" content=" Maksimum 100 simvol ola bilər ">',
            'property_og_title_en.max'=>'<meta property="og:title" content=" Maksimum 100 simvol ola bilər ">',

            'property_og_description_az.max'=>'<meta property="og:description" content=" Maksimum 100 simvol ola bilər ">',
            'property_og_description_en.max'=>'<meta property="og:description" content=" Maksimum 100 simvol ola bilər ">',

            'property_twitter_url_az.max'=>'<meta property="twitter:url" content=" Maksimum 100 simvol ola bilər ">',
            'property_twitter_url_en.max'=>'<meta property="twitter:url" content=" Maksimum 100 simvol ola bilər ">',

            'property_twitter_title_az.max'=>'<meta property="twitter:title" content=" Maksimum 100 simvol ola bilər ">',
            'property_twitter_title_en.max'=>'<meta property="twitter:title" content=" Maksimum 100 simvol ola bilər ">',

            'property_twitter_description_az.max'=>'<meta property="twitter:description" content=" Maksimum 100 simvol ola bilər ">',
            'property_twitter_description_en.max'=>'<meta property="twitter:description" content=" Maksimum 100 simvol ola bilər ">',
        ];
    }

    public function attributes()
    {
        return [
          'menus'=>'Menu'
        ];
    }
}
