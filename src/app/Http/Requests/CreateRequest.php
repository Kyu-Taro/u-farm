<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'name' => 'required|max:255',
            'price' => 'required|integer',
            'area' => 'required',
            'day' => 'required|integer',
            'text' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '※入力必須です',
            'name.max' => '※255文字以内で入力してください',
            'price.required' => '※入力必須です',
            'price.integer' => '※数値で入力してください',
            'area.required' => '※入力必須です',
            'day.required' => '※入力必須です',
            'day.integer' => '※数値で入力してください',
            'text.required' => '※入力必須です',
            'text.max' => '※255文字以内で入力してください',
        ];
    }
}
