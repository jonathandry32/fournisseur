<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OffreRequest extends FormRequest
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
            'nom' =>'required|min:2',
            'tempsTotal' =>'required',
            'tempsHomme' =>'required',
        ];
    }

    public function messages(){
        return [
            'nom.required' => 'nom requis',
            'nom.min' => 'valeur minimum de nom de l\'offre : 3 caracteres',
            'tempsTotal.required' => 'tempsTotal requis',
            'tempsHomme.required' => 'tempsHomme requis',
            
        ];
    }
}
