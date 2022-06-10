<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AskQuestionRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'body' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'প্রশ্নের টাইটেল লিখুন।',
            'body.required' => 'প্রশ্নের ব্যাখ্যা দিন।',
        ];
    }
}
