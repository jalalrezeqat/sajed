<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContectusFromRequest extends FormRequest
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
            'our_mission_titel'=> [
                'required',
                'string'
            ],
            'our_mission_text'=> [
                'required',
                'string'
            ],
          
        ];
    }
}
