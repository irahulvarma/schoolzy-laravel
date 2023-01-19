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
            'id' => "sometimes|required|integer|exists:school",
            'school_name' => "sometimes|required|min:8|max:255",
            'principal' => "sometimes|required|min:8|max:255",
            'board' => "sometimes|required",
            'medium' => "sometimes|required",
            'foundation_year' => "sometimes|required|digits:4|integer|min:1600|max:".(date('Y')+1),
        ];
    }

    public function all($keys = null)
    {
        $data = parent::all($keys);

        if ($this->route('id') != null) {
            $data['id'] = $this->route('id');
        }

        return $data;
    }
}
