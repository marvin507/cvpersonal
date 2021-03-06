<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'user_name' => 'required|unique:users,user_name,'.$this->route('perfil'),
            'email' => 'required|unique:users,email,'.$this->route('perfil'),
            'password' => 'confirmed'
        ];
    }
}
