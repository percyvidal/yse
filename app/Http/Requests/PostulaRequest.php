<?php

namespace Yse\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostulaRequest extends FormRequest
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
            //
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email:rfc,dns',
            'phone' => 'required|numeric',
            'cv' => 'required|mimes:pdf,doc,docx|max:10240',
        ];
    }

    public function messages(){

        return [
            'name.required' => 'El nombre es requerido',
            'lastname.required' => 'El apellido es requerido',
            'email.required' => 'El apellido es requerido',
            'phone.required' => 'El teléfono es requerido',
            'cv.required' => 'El CV es requerido',
            'cv.mimes' => 'Solo se acepta CVs en formatos: pdf, doc, docx',
            'cv.max' => 'El CV debe pesar menos de 10MB',
        ];
    }
}
