<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => ['required','min:3'],
            'email' =>['required','email'],
            'message' =>['required','min:10'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Ce champ ne doit pas etre vide',
            'name.min' => 'Vous devez saisir un nom au minimun min: caracteres',
            'email.required' => 'Vous devez saisir une adresse email',
            'email.email' => 'Vous devez saisir une adresse email valide',
            'message.required' => 'Ce champ  ne doit pas etre vide ',
            'message.min' => 'Vous devez saisir un message au minimun min: caracteres',
        ];
    }

    
}
