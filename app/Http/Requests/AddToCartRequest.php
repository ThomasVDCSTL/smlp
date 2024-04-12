<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddToCartRequest extends FormRequest
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
            'product_uuid' => ['required', 'string', 'max:255'],
            'quantity' => ['required', 'numeric', 'min:1'],
        ];
    }

    public function messages(): array
    {
        return [
          'product_uuid.required' => 'Le produit est obligatoire.',
            'product_uuid.string' => 'Le produit doit être une chaîne de caractères.',
            'product_uuid.max' => 'Le produit ne doit pas dépasser 255 caractères.',
            'quantity.required' => 'La quantité est obligatoire.',
            'quantity.numeric' => 'La quantité doit être un nombre.',
            'quantity.min' => 'La quantité ne doit pas être inférieure à 1.',
        ];
    }
}
