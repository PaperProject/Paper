<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\Request;

class RegisterRequest extends Request
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
          'first_name' => 'required|alpha|min:2|max:35',
          'last_name' => 'required|alpha|min:2|max:35',
          'username' => 'required|min:4|max:25',
          'email' => 'required|email|unique:users',
          'password' => 'required|confirmed|min:8',
        ];
    }
}
