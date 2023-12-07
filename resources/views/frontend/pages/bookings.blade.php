@extends('frontend.layouts.master')

@section('title', 'Bookings')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('bookings.store', ['venue' => $venueId]) }}">
            @csrf

            <div class="form-group">
                <label for="venue_id">Venue:</label
                <input type="text" class="form-control" id="venue_id" name="venue_id" value="{{ $venue->vanue_name }}" readonly>
                <input type="hidden" name="venue_id" value="{{ $venueId }}">
            </div>

            <div class="form-group">
                <label for="booking_date">Booking Date:</label>
                <input type="date" class="form-control" id="booking_date" name="booking_date" value="{{ old('booking_date') }}" required>
            </div>

            <div class="form-group">
                <label for="shift">Shift:</label>
                <select class="form-control" id="shift" name="shift" required>
                    <option value="morning">Morning</option>
                    <option value="evening">Evening</option>
                </select>
            </div>

            <div class="form-group">
                <label for="event_name">Event Name:</label>
                <input type="text" class="form-control" id="event_name" name="event_name" value="{{ old('event_name') }}" required>
            </div>

            <div class="form-group">
                <label for="additional_info">Additional Information:</label>
                <textarea name="additional_info" class="form-control" id="additional_info" rows="5">{{ old('additional_info') }}</textarea>
            </div>

            <div class="form-group">
                <label for="start_time">Start Time:</label>
                <input type="time" class="form-control" id="start_time" name="start_time" value="{{ old('start_time') }}" required>
            </div>

            <div class="form-group">
                <label for="end_time">End Time:</label>
                <input type="time" class="form-control" id="end_time" name="end_time" value="{{ old('end_time') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit Booking Request</button>
        </form>
    </div>
@endsection
