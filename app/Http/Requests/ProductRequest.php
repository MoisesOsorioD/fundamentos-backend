<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:2|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0|max:999999.99',
            'category' => 'required|string|min:2|max:255'

        ];
    }

    public function messages(){
        return [
            'name.required' => 'El nombre del producto es requerido.',
            'name.string' => 'El nombre del producto debe contener solo caracteres.',
            'name.min' => 'El nombre del producto tiene un minimo de caracteres de 2',
            'name.max' => 'El nombre del producto tiene un máximo de caracteres de 255',

            'description.string' => 'La descripción del producto debe ser texto válido.',

            'price.required' => 'El precio del producto es obligatorio.',
            'price.numeric' => 'El precio del producto debe ser un número.',
            'price.min' => 'El precio del producto no puede ser negativo.',
            'price.max' => 'El precio del producto no puede ser mayor a 999999.99.',

            'category.required' => 'La categoria del producto es requerido.',
            'category.string' => 'La categoria del producto debe contener solo caracteres.',
            'category.min' => 'La categoria del producto tiene un minimo de caracteres de 2',
            'category.max' => 'La categoria del producto tiene un máximo de caracteres de 255'

        ];
    }
}
