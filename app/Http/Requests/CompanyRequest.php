<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
        $on_update = $this->method() =="PUT" ? "": "|unique:companies";
        return [
            'name' => 'required|string',
            'email' => 'nullable|string|email|max:100'.$on_update,
            'logo' => 'nullable|image|mimes:jpeg,png,jpg',
            'website' => 'nullable|string|max:100',
        ];
    }
}
