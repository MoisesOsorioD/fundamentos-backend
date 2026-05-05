<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class SupplierRequest extends FormRequest
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
            'contact_email' => 'nullable|email|max:255',
            'contact_phone' => 'nullable|string|min:8|max:20',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre del proveedor es obligatorio.',
            'name.string' => 'El nombre del proveedor debe ser texto.',
            'name.min' => 'El nombre del proveedor debe tener al menos 2 caracteres.',
            'name.max' => 'El nombre del proveedor no puede superar los 255 caracteres.',

            'contact_email.email' => 'El correo electrónico no es válido.',
            'contact_email.max' => 'El correo electrónico no puede superar los 255 caracteres.',

            'contact_phone.string' => 'El teléfono debe ser texto.',
            'contact_phone.min' => 'El teléfono debe tener al menos 8 caracteres.',
            'contact_phone.max' => 'El teléfono no puede superar los 20 caracteres.'
        ];
    }
}
