<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
{
    public function authorize()
    {
        return backpack_auth()->check() && backpack_user()->can('Manage Team');
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'position' => 'required',
            'media1' => 'required',
            'media2' => 'required',
            'media3' => 'required',
            'media4' => 'required',
            'image' => 'required'
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
