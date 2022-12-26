<?php

namespace App\Http\Requests\Info;

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
            'title' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg',
            'description' => 'required|string',
            'full_name' => 'required|string',
            'age' => 'required|date',
            'ph_numbers' => 'required|array',
            'address' => 'required|string',
            'qrcode_path' => 'nullable',
            'logo_path' => 'nullable'
        ];
    }
}
