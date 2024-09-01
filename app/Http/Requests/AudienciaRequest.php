<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AudienciaRequest extends FormRequest
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
            'id_processo'    =>  'required|max:20',
            'id_tipo_audiencia'    =>  'required|max:20',
            'id_varas'    =>  'required|max:20',
            'id_regiaos'    =>  'required|max:20',
            'id_adv'    =>  'required|max:20',
            'id_status'    =>  'required|max:20',
            'data_horario_audiencia'    =>  'required|max:20',
            'finished'    =>  'required|max:20',
        ];
    }
}
