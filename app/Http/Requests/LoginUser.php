<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginUser extends FormRequest
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
                'username' => 'required',
                'password' => 'required|min:6'
            ];
    }

    /** 
     * Set the validation message that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'username.required' => 'Username is required.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password length is min 6.',
        ];
    }
}
