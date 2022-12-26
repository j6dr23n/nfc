<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
            'title' => 'nullable|string',
            'full_name' => 'nullable|string',
            'description' => 'nullable|string',
            'ph_number' => 'nullable|min:10',
            'address' => 'nullable|string',
            'age' => 'nullable|date'
        ];
    }
}
