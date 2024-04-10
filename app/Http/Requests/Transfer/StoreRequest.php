<?php

namespace App\Http\Requests\Transfer;

use App\Models\Account;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreRequest extends FormRequest
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
            'title' => 'required|string|between:3,60',
            'amount' => 'required|numeric|min:0|max:1000000000',
            'account_from_id' => 'required|exists:accounts,id',
            'account_to_id' => 'required|exists:accounts,id',
        ];
    }
}
