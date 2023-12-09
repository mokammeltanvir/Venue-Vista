@extends('frontend.layouts.master')

@section('title', 'Customer Dashboard')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>User Information</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
                        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                        <p><strong>Phone:</strong> {{ Auth::user()->phone }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Booked Venues</h4>
                    </div>
                    <div class="card-body">
                        @if(count($bookings) > 0)
                            <ul class="list-group">
                                @foreach($bookings as $booking)
                                    <li class="list-group-item">
                                        <h5>{{ $booking->venue->name }}</h5>
                                        <p><strong>Status:</strong> {{ $booking->status }}</p>
                                        <p><strong>Price:</strong> {{ $totalAmount = $booking->venue->venue_price + $booking->extra_charges;}}</p>
                                        <p><strong>Payment Method:</strong> {{ $booking->payment_method }}</p>
                                        <p><strong>Booking Date:</strong> {{ $booking->booking_date }}</p>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>No booked venues yet.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
