<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'postNumber' => 'required|integer',
            'area' => 'required|max:255',
            'tell' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '※入力必須です',
            'email.required' => '※入力必須です',
            'email.email' => '※正しく入力してください',
            'postNumber.required' => '※入力必須です',
            'postNumber.integer' => '※数値で入力してください',
            'area.required' => '※入力必須です',
            'area.max' => '※255文字以内で入力してください',
            'tell.required' => '※入力必須です',
        ];
    }
}
