<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class sitting_contactRequest extends FormRequest
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
            'email' => 'nullable|email',
            'phone' => 'nullable|numeric|digits:10',
            'address' => 'nullable|max:400',
        ];
    }

    public function messages()
    {
        return [
            'email.email' => 'خطأ في البريد الإلكتروني',
            'phone.numeric' => 'حقل رقم الهاتف يجب ان يكون رقمي',
            'phone.digits' => 'يجب ان يتكون رقم الهاتف من 10 خانات',
            'address.max' => 'لقد تجاوزت حد الكتابة في العنوان',
        ];
    }
}
