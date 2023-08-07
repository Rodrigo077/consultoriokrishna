<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicoEntityCreateRequest extends FormRequest
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
            'especialidade' => 'required|min:4|max:100',
            'cidade_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Campo obrigatório.',
            'nome.min'  => 'O mínimo de caracteres são 4.',
            'nome.max'  => 'O máximo de caracteres são 100.',
            'especialidade.required' => 'Campo obrigatório.',
            'especialidade.min' => 'O mínimo de caracteres são 4.',
            'especialidade.min' => 'O máximo de caracteres são 100.',
            'cidade_id.required' => 'Campo obrigatório.'
        ];
    }
}
