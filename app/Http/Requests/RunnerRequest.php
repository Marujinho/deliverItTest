<?php

namespace App\Http\Requests;

use App\Rules\RaceSameTimes;
use Illuminate\Foundation\Http\FormRequest;

class RunnerRequest extends FormRequest
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
            'name'  => 'required|max:150',
            'cpf' => 'required|min:14|max:14',
            'born_at' => 'required|date|date_format:d/m/Y',
            'race' => ['required','exists:races,id',new RaceSameTimes($this->cpf)]
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'race.exists' => 'Selecione uma corrida válida.',
            'cpf.required' => 'Campo CPF é obrigatório',
            'born_at.required' => 'Campo data de nascimento é obrigatório',
            'name.required' => 'Campo Nome é obrigatório',
            'born_at.date' => 'Campo data de nascimento inválido',
            'born_at.date_format' => 'Formato deve ser dia/mês/ano'
        ];
    }
}
