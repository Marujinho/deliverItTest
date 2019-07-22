<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RaceRequest extends FormRequest
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
            'type'  => 'required|numeric',
            'starts_at' => 'required|date|date_format:d/m/Y'
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'type.required' => 'Campo tipo de corrida é obrigatório',
            'type.number'   => 'Tipo da corrida inválido',
            'starts_at.required' => 'Campo Data da corrida é obrigatório',
            'starts_at.date'   => 'Data da corrida inválida'
        ];
    }
}
