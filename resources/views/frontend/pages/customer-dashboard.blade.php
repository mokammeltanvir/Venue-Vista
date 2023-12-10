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
                                        <h3><strong>Venue Name:</strong> {{ $booking->venue->venue_name }}</h3>
                                        <p><strong>Venue Address:</strong> {{ $booking->venue->venue_address }}</p>

                                        <p class="text-capitalize"><strong>Booking Status:</strong> {{ $booking->status }}</p>
                                        <p><strong>Booking Date:</strong> {{ $booking->booking_date }}</p>
                                        <p class="text-capitalize"><strong>Booking Time:</strong> {{ $booking->shift }}</p>
                                        <p><strong>Venue Price:</strong> ৳ {{ $booking->venue->venue_price}}</p>
                                        <p><strong>Extra Charges:</strong> ৳ {{ $booking->extra_charges }}</p>
                                        <hr>
                                        <p><strong>Total Price:</strong> ৳ {{ $totalAmount = $booking->venue->venue_price + $booking->extra_charges;}}</p>


                                        @if($booking->payment_method == 'cash')
                                            <p><strong>Payment Method: </strong>Cash</p>
                                        @else
                                        <strong>Payment Method: </strong>
<form action="{{route('pay.online')}}" method="POST">
@csrf
    <button type="submit" class="btn btn-sm btn-warning">Online Payment</button>
</form>

                                        @endif
                                        <p><strong>Payment Status:</strong> {{ $booking->payment_status }}</p>

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
