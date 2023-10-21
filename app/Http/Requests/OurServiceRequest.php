<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OurServiceRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title_en' => ['required'],
            'title_ar' => ['required'],
            'desc_en' => ['required'],
            // 'desc_ar' => ['required'],
        ];
    }
}
