<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SittingPublic extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:70'],
            'file' => ['nullable', 'image', 'mimes:jpeg,jpg,png,gif', 'max:1000'], // 1000KB = 1MB
        ];
    }
    
    public function messages(): array
    {
        return [
            'name.required' => 'حقل اسم الشركة مطلوب',
            'name.string'  => 'حقل اسم الشركة يجب أن يكون نصًا',
            'name.max'     => 'حقل اسم الشركة لا يجب أن يتجاوز 70 حرفًا',
            
            'file.image'   => 'الملف يجب أن يكون صورة',
            'file.mimes'  => 'امتداد الصورة غير مسموح به (المسموح: jpeg, jpg, png, gif)',
            'file.max'     => 'حجم الصورة يجب ألا يتجاوز 1 ميجابايت',
        ];
    }
}
