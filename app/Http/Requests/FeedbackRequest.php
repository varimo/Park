<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_name' => 'required',
            'user_phone' => 'required',
            'user_email' => 'required|email',
            'user_message' => 'required|min:15|max:500'
        ];
    }

    public function messages() {
        return [
            'user_name.required' => 'Поле имя является обязательным',
            'user_phone.required' => 'Поле телефон является обязательным',
            'user_email.required' => 'Поле email является обязательным',
            'user_message.required' => 'Поле сообщение является обязательным',
            'user_message.min' => 'В поле сообщения минимум 15 символов',
            'user_message.max' => 'В поле сообщения максимум 500 символов'
        ];
    }
}
