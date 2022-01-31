<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanRequest extends FormRequest
{
    public function authorize()
    {
        return backpack_auth()->check() && backpack_user()->can('Manage Plan');
    }

    public function rules()
    {
        return [
            'title' => 'required',
            'price' => 'required',
            'period' => 'required',
            'button_text' => 'required',
            'button_link' => 'required',
            'description' => 'required'
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
