<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactsStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;//we will talk about it later
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required','max:20','min:2'],
            'email' => ['required','email'],
            // 'subject' => ['required','max:255'],
            'subject' => ['nullable','max:255'],
            'message' => ['required','max:2000'],
        ];
    }
    function messages()
    {
        return [
            'name.required' => 'Please fill the name field',
            'name.max' => 'The max length of name is 20',
            'name.min' => 'The min length of name is 2',
            'email.required' => 'Please fill the email field',
            'subject.required' => 'Please fill the subject field',
            'message.required' => 'Please fill the message field',
        ];
    }
}
