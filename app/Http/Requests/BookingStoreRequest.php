<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'venue_id' => 'required|exists:venues,id',
            'booking_date' => 'required|date',
            'shift' => 'required|in:morning,evening',
            'event_name' => 'required|string|max:255',
            'no_of_guests' => 'nullable|integer|min:1',
            'additional_info' => 'nullable|string|max:1000',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'services.*' => 'nullable|in:catering,photography,videography,decoration',
            'payment_method' => 'required|in:cash,online',
        ];
    }

    /**
     * Get custom messages for validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'end_time.after' => 'The end time must be after the start time.',
        ];
    }
}
