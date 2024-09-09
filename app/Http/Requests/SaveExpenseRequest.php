<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveExpenseRequest extends FormRequest
{
    /**
     * Determinar si el usuario está autorizado para realizar esta solicitud.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Obtenga las reglas de validación que se aplican a la solicitud.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'type'         => 'required|max:100',
            'amount'       => 'required|numeric|decimal:0,2',
            'description'  => 'required',
            'expense_date' => 'required|date',
        ];
    }
}
