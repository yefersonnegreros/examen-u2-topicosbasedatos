<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAlumnoRequest extends FormRequest
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
            'nombre' => 'required|string|max:255',
            'curso' => 'required|string|max:255',
            'nota_1' => 'required|numeric|between:0,20',
            'nota_2' => 'required|numeric|between:0,20',
        ];
    }

    /**
     * Get the custom validation messages.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.string' => 'El nombre debe ser una cadena de caracteres.',
            'nombre.max' => 'El nombre no puede tener más de 255 caracteres.',
            'curso.required' => 'El curso es obligatorio.',
            'curso.string' => 'El curso debe ser una cadena de caracteres.',
            'curso.max' => 'El curso no puede tener más de 255 caracteres.',
            'nota_1.required' => 'La nota 1 es obligatoria.',
            'nota_1.numeric' => 'La nota 1 debe ser un número.',
            'nota_1.between' => 'La nota 1 debe estar entre 0 y 20.',
            'nota_2.required' => 'La nota 2 es obligatoria.',
            'nota_2.numeric' => 'La nota 2 debe ser un número.',
            'nota_2.between' => 'La nota 2 debe estar entre 0 y 20.',
        ];
    }
}
