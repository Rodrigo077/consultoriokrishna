<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteEntityCreateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|min:4|max:100',
            'cpf'  => 'required|min:11|max:20',
            'celular' => 'required|min:11|max:20'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Este campo é obrigatório',
            'nome.min' => 'O mínino de caracteres são 4',
            'nome.max' => 'O Máximo de caracteres são 100',
            'cpf.required' => 'Este campo é obrigatório',
            'cpf.min' => 'O mínimo de caracteres são 11',
            'cpf.max' => 'O máximo de caracteres são 20',
            'celular.required' => 'Este campo é obrigatório',
            'celular.min' => 'O mínimo de caracteres são 11',
            'celular.max' => 'O máximo de caracteres são 20'
        ];
    }
}
