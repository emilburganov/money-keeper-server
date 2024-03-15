<?php

namespace App\Http\Requests\Income;

use App\Enums\CategoryTypeEnum;
use App\Models\Account;
use App\Models\Category;
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
        $incomeCategories = Category::query()
            ->where('type', CategoryTypeEnum::INCOMES)
            ->get();

        return [
            'title' => 'required|string|between:3,60',
            'amount' => 'required|numeric|min:0|max:1000000000',
            'category_id' => [
                'required',
                'exists:categories,id',
                Rule::in($incomeCategories->pluck('id')),
            ],
            'account_id' => 'required|exists:accounts,id',
        ];
    }
}
