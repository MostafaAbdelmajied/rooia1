<?php

namespace App\Http\Requests\admins;

use Illuminate\Foundation\Http\FormRequest;

class StoreServicesRequest extends FormRequest
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            'ar_desc' => 'required|string|max:500',
        ];
    }


    /**
     * Get the custom validation messages.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'image.required' => 'يجب إدخال صورة المشروع.',
            'image.image' => 'يجب أن تكون الصورة ملف صورة.',
            'image.mimes' => 'يجب أن تكون الصورة من نوع: jpeg، png، jpg، gif.',
            'image.max' => 'يجب أن لا تتجاوز الصورة 2048 كيلوبايت.',
            'ar_desc.required' => 'يجب إدخال وصف المشروع.',
            'ar_desc.string' => 'يجب أن يكون الوصف نصًا.',
            'ar_desc.max' => 'يجب أن لا يتجاوز الوصف 500 حرفًا.',
        ];
    }
}
