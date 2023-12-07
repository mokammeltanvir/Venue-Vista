@extends('frontend.layouts.master')
@section('title', 'Bookings')
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="side-box" id="inquiry">
            <h2>Send Enquiry to Vendor</h2>
            <p>Fill in your details and a Venue Specialist will get back to you shortly.</p>
            <!-- resources/views/bookings/create.blade.php -->

        <form method="post" action="{{route('bookings.store')}}" class="needs-validation" novalidate>
            @csrf <!-- Laravel CSRF protection token -->

            <!-- Venue Details -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="venue_id">Venue name<span class="text-danger">*</span></label>
                    <input type="text" value="{{$venue->venue_name}}" class="form-control" id="vanue_name" name="venue_name" required readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="event_type">Event Type <span class="text-danger">*</span></label>
                    <select class="form-control" id="event_type" name="event_type" required>
                        <option value="">Select Event Type</option>
                        <option value="wedding">Wedding</option>
                        <option value="birthday">Birthday</option>
                        <option value="corporate">Corporate</option>
                        <option value="social">Social</option>
                        <option value="others">Others</option>
                    </select>
                </div>
            </div>


            <!-- User Details -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="customer_name">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="customer_name" name="customer_name" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="customer_email">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="customer_email" name="customer_email" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="customer_phone">Phone <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="customer_phone" name="customer_phone" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="customer_address">Address</label>
                    <input type="text" class="form-control" id="customer_address" name="customer_address">
                </div>
            </div>

            <!-- Booking Details -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="booking_date">Booking Date <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="booking_date" name="booking_date" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="number_of_guests">Number of Guests <span class="text-danger">*</span></label>
                    <select class="form-control" id="number_of_guests" name="number_of_guests" required>
                        <option value="35 to 50">35 to 50</option>
                        <option value="50 to 65">50 to 65</option>
                        <option value="65 to 85">65 to 85</option>
                        <option value="85 to 105">85 to 105</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="start_time">Start Time <span class="text-danger">*</span></label>
                    <input type="time" class="form-control" id="start_time" name="start_time" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="end_time">End Time <span class="text-danger">*</span></label>
                    <input type="time" class="form-control" id="end_time" name="end_time" required>
                </div>
            </div>

            <!-- Payment Details -->
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="payment_method">Payment Method</label>
                    <select class="form-control" id="payment_method" name="payment_method">
                        <option value="cash on service">Cash on Service</option>
                        <option value="online payment">Online Payment</option>
                        <!-- Add other payment methods if needed -->
                    </select>
                </div>
            </div>

            <button class="btn btn-primary btn-lg mt-5" type="submit">Book My Venue Now</button>
        </form>
        </div>
    </div>
</div>
</div>
@endsection

@push('scripts')
<script>
    // Bootstrap's form validation script
    (function () {
        'use strict';

        window.addEventListener('load', function () {
            var forms = document.getElementsByClassName('needs-validation');

            Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
@endpush
