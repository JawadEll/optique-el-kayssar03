<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FactureRequest extends FormRequest
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
            'nom_complet'=>'required',
            'date' => 'required|date',
            'n_facture' => 'required',
            'monture' => 'required',
            'qté_monture' => 'required',
            'prix_ttc_monture' => 'required',
            'od_og' => 'required',
            'qté_od' => 'required',
            'prix_ttc_od' => 'required',
            'qté_og' => 'required',
            'prix_ttc_og' => 'required',
            'description_od' => 'min:2',
            'description_og' => 'min:2'
        ];
    }
}
