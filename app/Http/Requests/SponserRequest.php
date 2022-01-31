<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SponserRequest extends FormRequest
{
    public function authorize()
    {
        return backpack_auth()->check() && backpack_user()->can('Manage Sponser');
    }

    public function rules()
    {
        return [
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
