<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;

class UserRequest extends FormRequest
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
        switch($this->method())
        {
            case 'PATCH':
            {
                 return [
                'email'      => 'required|email|unique:users,email,'.$this->user->id,
                'password'   => 'required'
                ];
            }   

            case 'POST':
            {      
                return [
                'email'      => 'required|email|unique:users,email',
                'password'   => 'required'
                ];
            }
        }
    }
        
}       
           
       
 