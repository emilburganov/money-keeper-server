<?php

namespace App\Http\Requests\Auth;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|between:3,60',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'currency_id' => 'required|exists:currencies,id',
            'avatar' => 'nullable|image|mimes:png,jpg,svg|max:4096',
        ];
    }
}
