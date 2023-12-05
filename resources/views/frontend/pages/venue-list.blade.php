@extends('frontend.layouts.master')
@section('title', 'Venue List')

@section('content')
<div class="tp-page-head">
    <!-- page header -->
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="page-header text-center">
                    <div class="icon-circle">
                        <i class="icon icon-size-60  icon-list icon-white"></i>
                    </div>
                    <h1>Venue Listing No Sidebar / Full page</h1>
                    <p>Venue Listing No Sidebar / Full page for multiple use for vendor.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tp-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Vendor List No Sidebar</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title mb60 text-center">
                    <h1>More than 2,000 Wedding Vendors</h1>
                    <p> Donec sagittis blandit ex consequat pulvin ondimentum tortor eitae suscipit augupibus </p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- venue box start-->
            @foreach ($allvenue as $venue)

            <div class="col-md-4 vendor-box">
                <div class="vendor-image">
                    <!-- venue pic -->
                    <a href="{{route('venue.details', ['venue_slug'=> $venue->venue_slug])}}"><img src="{{asset('uploads/venue_photos')}}/{{$venue->venue_image}}" alt="wedding venue" class="img-responsive"></a>
                    <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
                </div>
                <!-- /.venue pic -->
                <div class="vendor-detail">
                    <!-- venue details -->
                    <div class="caption">
                        <!-- caption -->
                        <h2><a href="{{route('venue.details', ['venue_slug'=> $venue->venue_slug])}}" class="title">{{$venue->venue_name}}</a></h2>
                        <p class="location"><i class="fa fa-map-marker"></i> {{$venue->venue_address}}</p>
                        <div class="rating ">
                            <i class="fa fa-users"></i> Venue Capacity: {{$venue->venue_capacity}}
                        </div>
                    </div>
                    <!-- /.caption -->
                    <div class="vendor-price">
                        <div class="price">৳ {{$venue->venue_price}}</div>
                    </div>
                    <div class="vendor-price">
                        <a href="{{route('venue.details', ['venue_slug'=> $venue->venue_slug])}}" class="btn btn-primary btn-sm">View Details</a>
                    </div>
                </div>
                <!-- venue details -->
            </div>
            <!-- /.venue box start-->
            @endforeach

        </div>
        <div class="row">
            <div class="col-md-12 tp-pagination">
                {{ $allvenue->links() }}
            </div>

        </div>
    </div>
</div>

@endsection
