<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;

class StoreProductRequest extends FormRequest
{

    public function authorize(): bool
    {

        return $this->user()->artisan;
    }
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        return [
            'designation' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:5000'],
            'image' => ['nullable', 'string', 'max:255'],
            'materials' => ['nullable', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric', 'min:0'],
            'artisan_uuid' => ['required', 'string', 'max:255'],
        ];
    }

    protected function failedValidation(Validator|\Illuminate\Contracts\Validation\Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(), 400));
    }

    public function messages(): array
    {
        return [
            'designation.required' => 'Le nom du produit est obligatoire.',
            'designation.string' => 'Le nom du produit doit être une chaîne de caractères.',
            'designation.max' => 'Le nom du produit ne doit pas dépasser 255 caractères.',
            'description.string' => 'La description doit être une chaîne de caractères.',
            'description.max' => 'La description ne doit pas dépasser 5000 caractères.',
            'image.string' => 'L\'image doit être une chaîne de caractères.',
            'image.max' => 'L\'image ne doit pas dépasser 255 caractères.',
            'material.string' => 'Le matériau doit être une chaîne de caractères.',
            'material.max' => 'Le matériau ne doit pas dépasser 255 caractères.',
            'category.required' => 'La catégorie est obligatoire.',
            'category.string' => 'La catégorie doit être une chaîne de caractères.',
            'category.max' => 'La catégorie ne doit pas dépasser 255 caractères.',
            'price.required' => 'Le prix est obligatoire.',
            'price.numeric' => 'Le prix doit être un nombre.',
            'price.min' => 'Le prix ne doit pas être inférieur à 0.',
            'artisan_uuid.required' => 'L\'identifiant de l\'artisan est obligatoire.',
        ];
    }
}
