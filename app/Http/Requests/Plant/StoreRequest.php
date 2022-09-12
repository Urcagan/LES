<?php

/**
 * Создаем реквест командой  php artisan make:request Complex/StoreRequest
 */

namespace App\Http\Requests\Plant;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Обязательно меняем на true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'NamePlant' => 'string',
            'Description' => 'nullable | string',
            'complex_id' => 'required | numeric',
        ];
    }
}
