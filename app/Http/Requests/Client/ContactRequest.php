<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Cho phép request này
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required',
            'service' => 'required|in:web,graphic,video',
            'content' => 'required|string|min:10|max:1000',
            'check' => 'accepted',
        ];
    }

    /**
     * Get custom messages for validation errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập họ tên.',
            'name.max' => 'Họ tên không được vượt quá 255 ký tự.',
            'email.required' => 'Vui lòng nhập email.',
            'email.email' => 'Email không hợp lệ.',
            'email.max' => 'Email không được vượt quá 255 ký tự.',
            'phone.required' => 'Vui lòng nhập số điện thoại.',
            'service.required' => 'Vui lòng chọn dịch vụ.',
            'service.in' => 'Dịch vụ không hợp lệ.',
            'content.required' => 'Vui lòng nhập nội dung.',
            'content.min' => 'Nội dung phải chứa ít nhất 10 ký tự.',
            'content.max' => 'Nội dung không được vượt quá 1000 ký tự.',
            'check.accepted' => 'Bạn cần đồng ý với Điều khoản & Điều kiện.',
        ];
    }


}