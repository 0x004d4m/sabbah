<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainRequest extends FormRequest
{
    public function authorize()
    {
        return backpack_auth()->check() && backpack_user()->can('Manage Main');
    }

    public function rules()
    {
        return [
            'title' => 'required',
            'title_small' => 'required',
            'button_text' => 'required',
            'button_link' => 'required',
            'image' => 'required',
            'features_title2' => 'required',
            'features_icon1' => 'required',
            'features_description1' => 'required',
            'features_title2' => 'required',
            'features_icon2' => 'required',
            'features_description2' => 'required',
            'features_title3' => 'required',
            'features_icon3' => 'required',
            'features_description3' => 'required',
        ];
    }

    public function attributes()
    {
        return [

        ];
    }

    public function messages()
    {
        return [

        ];
    }
}
