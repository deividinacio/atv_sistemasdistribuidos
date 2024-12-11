<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NotaPostNotaRequest extends FormRequest
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
            'nota1' => 'required|numeric|max:10|min:0',
            'nota2' => 'required|numeric|max:10|min:0', // coloque o tamanho desejado
            'nota3' => 'required|numeric|max:10|min:0',
            'alunos_id_fk' => 'required|exists:alunos,id',
        ];
    }
}
