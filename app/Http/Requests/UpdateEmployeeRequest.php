<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name'=>'required|string|max:255',

            'last_name'=>'required|string|max:255',

            'email'=>'required|email|unique:employees,email',

            'phone'=>'nullable|string',

            'position'=>'required|string',

            'salary'=>'required|numeric',

            'hire_date'=>'required|date'
        ];
    }
}
