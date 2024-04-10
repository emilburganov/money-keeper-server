<?php

namespace App\Http\Requests\Account;

use App\Models\Account;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
            'title' => [
                'required',
                'string',
                'between:3,60',
                Rule::unique('accounts')
                    ->ignore($this->route('account'))
                    ->where('user_id', Auth::id())
            ],
            'currency_id' => 'required|exists:currencies,id',
        ];
    }
}
