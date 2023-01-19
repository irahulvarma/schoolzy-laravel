<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class EditSchool extends FormRequest
{
    protected $redirectRoute = 'list-school';
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
        ];
    }

    public function all($keys = null)
    {
        $data = parent::all($keys);

        $data['id'] = $this->route('id');

        return $data;
    }
}
