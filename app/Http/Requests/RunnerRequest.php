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
            'name'  => 'required|min:5|max:150',
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
        ];
    }
}
