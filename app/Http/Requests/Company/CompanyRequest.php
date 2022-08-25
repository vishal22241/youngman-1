<?php

namespace App\Http\Requests\Company;

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
        return [
            'company' => 'required|unique:users',
             'address' => 'required',
              'contact_person_name' => 'required',
              'contact_person_mobile' => 'required',
              'password' => 'required',
              'email' =>'required|email|unique:users',
                
        ];
    }
}
