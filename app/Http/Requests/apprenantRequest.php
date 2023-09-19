<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class apprenantRequest extends FormRequest
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
            
            'nom'=>'required|max:255',
            'prenom'=>'required|max:255',
            'addresse'=>'required|max:255',
            'telephone'=>'required|max:14|unique'
            
        ];
    }

    public function messages() : array
    {
        return [
            'nom.required'=>'le nom est vide',
            'prenom.required'=>'le nom est vide',
            'addresse.required'=>'le nom est vide',
            'telephone.required'=>'le nom est vide'
            
            //
        ];
    }
}
