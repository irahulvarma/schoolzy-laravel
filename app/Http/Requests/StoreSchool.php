<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreSchool extends FormRequest
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
            'school_name' => "required|min:8|max:255",
            'principal' => "required|min:8|max:255",
            'board' => "required",
            'medium' => "required",
            'foundation_year' => "required|digits:4|integer|min:1600|max:".(date('Y')+1),
        ];
    }
}
