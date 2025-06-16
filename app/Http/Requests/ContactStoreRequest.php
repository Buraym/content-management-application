<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
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
            'name' => 'required|min:5',
            'email' => 'required|email|unique:contacts,email',
            'contact' => ['required', 'unique:contacts,contact', 'regex:/^\d{9}$/'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo "Nome" é obrigatório.',
            'name.min' => 'O campo "Nome" deve ter no mínimo 5 caracteres.',
            'email.required' => 'O campo "Email" é obrigatório.',
            'email.email' => 'O campo "Email" deve ser um endereço de email válido.',
            'email.unique' => 'O campo "Email" deve ser único.',
            'contact.required' => 'O campo "Contato" é obrigatório.',
            'contact.unique' => 'O campo "Contato" deve ser único.',
            'contact.regex' => 'O campo "Contato" deve ser um válido, tendo exatos 9 caracteres, sendo todos estes dígitos.',
        ];
    }
}
