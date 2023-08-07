<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdmin extends FormRequest
{
    /**
     * Determine if the admin is authorized to make this request.
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>[
                'required',
                'min:3',
                'max:255',
                'string'
            ],

            'email'=>[
                'nullable',
                "unique:users,email,{$this->id},id"
            ],
            
            'password'=>[
                'nullable',
                'min:3',
                'max:15',
            ]
        ];
    }
}
