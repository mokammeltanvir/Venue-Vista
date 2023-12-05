@extends('frontend.layouts.master')
@section('title', 'Single Venue')
@section('content')

    <div id="slider" class="owl-carousel owl-theme slider">

        <div class="item">
            <div class="slider-pic"><img src="{{asset('uploads/venue_photos')}}/{{$venue->venue_image}}" alt="Mirror Edge"></div>
        </div>
        @foreach ($venue->venueImages as $image)

        <div class="item">
            <div class="slider-pic">
                <img src="{{asset('uploads/venue_photos')}}/{{$image->venue_multiple_image}}" alt="Mirror Edge">
            </div>
        </div>
        @endforeach


    </div>
    <div class="tp-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Venue Listing</a></li>
                        <li class="active">Wedding Venue Title Goes Here</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container venue-header">
        <div class="row venue-head">
            <div class="col-md-12 title"> <a href="#" class="label-primary">Available</a>
                <h1>{{$venue->venue_name}}</h1>
                <p class="location"><i class="fa fa-map-marker"></i>{{$venue->venue_address}}</p>
            </div>
            <div class="col-md-8 rating-box">
                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
            </div>

        </div>
    </div>
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-8 page-description">
                    <div class="venue-details">
                        <h2>Venue Details</h2>
                        <p>{{$venue->venue_description}}</p>
                        <p>{{$venue->additional_info}}</p>
                    </div>

                </div>
                <div class="col-md-4 page-sidebar">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="venue-info">
                                <!-- venue-info-->
                                <div class="capacity">
                                    <div>Capacity:</div>
                                    <span class="cap-people"> {{$venue->venue_capacity}} </span> </div>
                                <div class="pricebox">
                                    <div>price:</div>
                                    <span class="price">৳ {{$venue->venue_price}}</span></div>
                                    <button name="submit" class="btn btn-default btn-lg btn-block">Book MY Venue now</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div id="googleMap" class="map"></div> --}}

@endsection
