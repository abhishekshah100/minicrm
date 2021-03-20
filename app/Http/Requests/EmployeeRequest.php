<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
        $on_update = $this->method() =="PUT" ? "": "|unique:employees";
        return [
            'fname' => 'required|string|max:100',
            'lname' => 'required|string|max:100',
            'company_id' => 'required',
            'email' => 'nullable|string|email|max:100'.$on_update,
            'phone' => 'nullable|numeric|digits:10'
        ];
    }
}
