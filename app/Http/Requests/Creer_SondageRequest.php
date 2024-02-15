<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
class Creer_SondageRequest extends FormRequest
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
        'titre_sondage'=>'required',
        'question1'=>'required',
        'reponse_opt_1'=>'required',
        'reponse_opt_2'=>'required',
        'question2'=>'required',
        'question3'=>'required',
        'reponse_opt_3'=>'required',
        'reponse_opt_4'=>'required',
        'reponse_opt_5'=>'required',
        'question4'=>'required',
        'question5'=>'required',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
         'success' => false,
         'error' => true,
         'message' => 'Erreur de validation',
         'errorsList' => $validator->errors()
        ]));
    }

}
