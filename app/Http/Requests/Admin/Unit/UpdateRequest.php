<?php

/**
 * Создаем реквест командой  php artisan make:request Complex/StoreRequest
 */

namespace App\Http\Requests\Admin\Unit;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'NameUnit' => 'required | string',
            'Description' => 'nullable | string',
            'plant_id' => 'required | numeric',
        ];
    }
}
