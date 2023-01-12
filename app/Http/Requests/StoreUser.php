<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->role == 'admin';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => "required|max:255|alpha",
            'last_name' => "required|max:255|alpha",
            'email' => "sometimes|required|unique:users,email|email",
            'password' => "sometimes|required|min:8",
            'position' => "required",
            'phone' => "required|numeric|digits:10",
            'role' => "sometimes|required"
        ];
    }
}
