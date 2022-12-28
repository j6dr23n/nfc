<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
        if ($this->password !== null) {
            return [
                'username' => 'required|string',
                'email' => 'required|email',
                'current_password' => 'nullable|min:6',
                'password' => 'nullable|confirmed|min:6',
            ];
        } else {
            return [
                'username' => 'required|string',
                'email' => 'required|email',
            ];
        }
    }
}
