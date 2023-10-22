<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'name' => 'required|string|max:200',
            'email' => 'required|string|max:250|unique:clients,email,' . $this->id,
            'phone' => 'required|string|max:11',
            'birthday' => 'date_format:Y-m-d',
            'address' => 'required|string|max:200',
            'complement' => 'required|string|max:100',
            'neighborhood' => 'required|string|max:150',
            'zipcode' => 'required|string|max:9',
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
            'max' => ':attribute tem tamanho maximo de :max.',
            'unique' => ':attribute precisar ser exclusivo do cliente.',
            'date_format' => ':attribute precisa ter o formato YYYY-mm-dd.',
        ];
    }
}


