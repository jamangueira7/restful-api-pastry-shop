<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'client_id' => 'required|string|exists:clients,id',
            'products' => 'required|array',
            'products.*.id' => 'required|uuid',
            'products.*.amount' => 'required|integer',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
         return [
            'required' => ':attribute é obrigatório.',
            'string' => ':attribute precisa ser um texto.',
            'array' => ':attribute precisa ser uma lista.',
            'client_id.exists' => ':attribute não é um cliente valido.',
            'products.*.id.uuid' => 'O :attribute não é um UUID valido.',
            'products.*.amount.integer' => 'O :attribute precisa ser um número inteiro.',
        ];
    }
}


