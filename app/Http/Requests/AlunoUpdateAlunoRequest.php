<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoUpdateAlunoRequest extends FormRequest
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

            'nome' => 'string|max:255',
            'sobrenome' => 'string|max:255', // coloque o tamanho desejado
            'data_nascimento' => 'date',
            'turmas_id_fk'=> 'required|exists:turmas,id',
        ];
    }
}
