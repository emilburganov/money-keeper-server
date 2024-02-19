<?php

namespace App\Http\Requests\Category;

use App\Enums\CategoryTypeEnum;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

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
            'title' => [
                'required',
                'string',
                'between:3,60',
                Rule::unique('categories')
                    ->ignore($this->route('category'))
                    ->where('user_id', Auth::id())
            ],
            'type' => [Rule::enum(CategoryTypeEnum::class)],
        ];
    }
}
