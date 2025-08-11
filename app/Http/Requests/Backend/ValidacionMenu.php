<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionMenu extends FormRequest
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
            'nombre' => 'required|max:50|unique:menus,nombre,' . $this->route('id'),
            'url' => 'required|max:100',
            'icono' => 'nullable|max:50'
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required' => 'El campo Nombre es obligatorio.',
            'nombre.max' => 'El campo Nombre debe contener máximo :max caracteres.',
            'nombre.unique' => 'El valor del campo Nombre ya existe.',
            'url.required' => 'El campo Url es obligatorio.',
            'url.max' => 'El campo Url debe contener máximo :max caracteres.',
            'icono.max' => 'El campo Icono debe contener máximo :max caracteres.'
        ];
    }
}
