@extends('frontend.layouts.master')
@section('title', 'Single Venue')
@section('content')

    <div id="slider" class="owl-carousel owl-theme slider">
        <div class="item">
            <div class="slider-pic"><img src="{{asset('assets/frontend')}}/images/hero-image-2.jpg" alt="Mirror Edge"></div>
        </div>
        <div class="item">
            <div class="slider-pic"><img src="{{asset('assets/frontend')}}/images/venue-pic-3.jpg" alt="Wedding couple pic"></div>
        </div>
        <div class="item">
            <div class="slider-pic"><img src="{{asset('assets/frontend')}}/images/venue-pic.jpg" alt="The Last of us"></div>
        </div>
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
                <h1>Wedding Venue Title Goes Here</h1>
                <p class="location"><i class="fa fa-map-marker"></i>110 Pennington Street, London E1W 2BB</p>
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
                        <p>Latin words combined with a handful of model sentence structures, to generate Lorem Ipsum which one looks reasonable. The generated Lorem Ipsum is therefore always free from repetition injected humour or non characteristic words etc.</p>
                        <p>Quisque laoreet mi libero, et tempus lacus venenatis eget. Nulla vitaeipsum inturpis blandit congue ofer ornare inleo. Nulla nibhmi sagittis necaliquet pharetra vitae turpis. Nam tristique mauris necultricies its tristiqu. orbilitelit molestie eget tincidunt luctus consequat sitameturna.</p>
                        <p>Aenean sapienest, rutrum malesuada quamuis tristique tincinibh hasellusut elementum not semlass and aptent taciti sociosqu ad litorarutrum malesuada quamuis tristique torquent per conubia nostra permite inceptos our its it himenaeos aecsed laoreet diam. Crasut auctor ipsusque commodo suscipit onet tristiques viverrarcu idaugue blandit ultricies nibhrhoncus rutrum malesuada tristique.</p>
                        <p>Latin words combined with a handful of model sentence structures to generate Loremere Ipsum which looks reasonable. The generated lorem Ipsum is therefore always free fromes combined with a handful of model repetition injected humour or non characteristic words etc.</p>
                        <h2>Venue Facilities</h2>
                        <ul class="check-circle">
                            <li>Wedding Hall </li>
                            <li>Dining </li>
                            <li>Liability Insurance </li>
                            <li>In House Catering</li>
                            <li>Dining </li>
                            <li>DJ Facilities </li>
                            <li>Personal Chef</li>
                            <li>Guest Parking</li>
                            <li>Seating Amenities</li>
                        </ul>
                        <h2>Why Our Wedding Venue </h2>
                        <ul class="check-circle">
                            <li>Wedding parties have exclusive use of the venue for the day</li>
                            <li>Last Minute Offer £3,800 inc VAT for any wedding booked in the next 8 weeks.</li>
                            <li>Licensed for civil ceremonies, civil partnerships and outside ceremonies with stunning views.</li>
                            <li>This venue is a superb location for a Wedding Reception catering from 30 to 650 guests.</li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-4 page-sidebar">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="venue-info">
                                <!-- venue-info-->
                                <div class="capacity">
                                    <div>Capacity:</div>
                                    <span class="cap-people"> 50 - 300 </span> </div>
                                <div class="pricebox">
                                    <div>Avg price:</div>
                                    <span class="price">$39.50</span></div>
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
