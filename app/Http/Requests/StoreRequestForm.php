<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequestForm extends FormRequest
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
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => trans('request.name.required'),
            'phone.required' => trans('request.phone.required'),
            'name.min' => trans('request.name.min'),
        ];
    }
}
