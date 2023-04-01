<?php

namespace App\Http\Requests\ContactForm;

use Illuminate\Foundation\Http\FormRequest;

class SendMailRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'sei' => 'required',
            'mei' => 'required',
            'sei_kana' => 'required',
            'mei_kana' => 'required',
            'tel' => 'nullable',
            'email' => 'required|email',
            'about' => 'required',
            'detail' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'sei' => '姓',
            'mei' => '名',
            'sei_kana' => '姓（かな）',
            'mei_kana' => '名（かな）',
            'tel' => '姓',
            'email' => 'メールアドレス',
            'about' => 'お問い合わせ項目',
            'detail' => 'お問い合わせ内容詳細',
        ];
    }
}
