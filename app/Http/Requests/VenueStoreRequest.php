<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VenueStoreRequest extends FormRequest
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
            'location_id' => 'required|integer',
            'venue_name' => 'required|string|max:255',
            'venue_address' => 'required|string|max:255',
            'venue_capacity' => 'required|integer|min:1',
            'venue_price' => 'required|integer|min:1',
            'venue_description' => 'nullable|string',
            'venue_image' => 'required|image|max:2048',
            'additional_info' => 'nullable|string',

        ];
    }
}
