@extends('frontend.layouts.master')
@section('title', 'Venue Details')
@section('content')
    <div class="tp-page-head">
        <!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="page-header text-center">
                        <h1>Venue Single Tab Style</h1>
                        <p>You can present your item detail page with tab style.</p>
                    </div>
                </div>
            </div>
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
    <div class="main-container">
        <div class="container tabbed-page st-tabs">
            <div class="row tab-page-header">
                <div class="col-md-8 title"> <a href="#" class="label-primary">Boutique</a>
                    <h1>{{$venue->venue_name}}</h1>
                    <p class="location"><i class="fa fa-map-marker"></i>{{$venue->venue_address}}</p>
                    <hr>
                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                </div>
                <div class="col-md-4 venue-data">
                    <div class="venue-info">
                        <!-- venue-info-->
                        <div class="capacity">
                            <div>Capacity:</div>
                            <span class="cap-people"> {{$venue->venue_capacity}} </span> </div>
                        <div class="pricebox">
                            <div>Price:</div>
                            <span class="price">৳ {{$venue->venue_price}}</span></div>
                    </div>
                    <a href="{{ route('bookings.create', ['venue' => $venue->id]) }}" class="btn btn-default btn-lg btn-block">Book Venue</a> </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#photo" title="Gallery" aria-controls="photo" role="tab" data-toggle="tab"> <i class="fa fa-photo"></i> <span class="tab-title">Photo</span></a>
                        </li>
                        <li role="presentation">
                            <a href="#about" title="about info" aria-controls="about" role="tab" data-toggle="tab">
                                <i class="fa fa-info-circle"></i>
                                <span class="tab-title">About</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#amenities" title="Amenities" aria-controls="amenities" role="tab" data-toggle="tab"> <i class="fa fa-asterisk"></i> <span class="tab-title">Amenities</span></a>
                        </li>
                        <li role="presentation">
                            <a href="#onmap" title="Location" aria-controls="onmap" role="tab" data-toggle="tab"> <i class="fa fa-map-marker"></i> <span class="tab-title">On map</span></a>
                        </li>
                        <li role="presentation">
                            <a href="#video" title="Video" aria-controls="video" role="tab" data-toggle="tab"> <i class="fa fa-youtube-play"></i> <span class="tab-title">Video</span></a>
                        </li>

                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- tab content start-->
                        <div role="tabpanel" class="tab-pane fade in active" id="photo">
                            <div id="sync1" class="owl-carousel">
                                <div class="item"> <img src="{{asset('uploads/venue_photos')}}/{{$venue->venue_image}}" alt="" class="img-responsive"> </div>
                                @foreach ($venue->venueImages as $image)
                                <div class="item"> <img src="{{asset('uploads/venue_photos')}}/{{$image->venue_multiple_image}}" alt="" class="img-responsive"> </div>
                                @endforeach

                            </div>
                            <div id="sync2" class="owl-carousel">
                                <div class="item"> <img src="{{asset('uploads/venue_photos')}}/{{$venue->venue_image}}" alt="" class="img-responsive"> </div>
                                @foreach ($venue->venueImages as $image)
                                <div class="item"> <img src="{{asset('uploads/venue_photos')}}/{{$image->venue_multiple_image}}" alt="" class="img-responsive"> </div>
                                @endforeach
                            </div>

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="about">
                            <div class="venue-details">
                                <h2>Venue Details</h2>
                                <p>{{$venue->venue_description}}</p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="amenities">
                            <div class="row">
                                <div class="col-md-6 venue-amenities">
                                    <h2>Venue Facilities</h2>
                                    <p>{{$venue->additional_info}}</p>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="onmap">
                            <div id="googleMap" class="map"></div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="video">
                            <!-- 16:9 aspect ratio -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <!--<iframe class="embed-responsive-item" src=" Video URL HERE"></iframe>-->
                                <a href="javascript:void(0)"><img src="{{ asset('assets/frontend')}}/images/video.jpg" alt="" class="img-responsive"></a>
                            </div>
                        </div>

                    </div>
                    <!-- /.tab content start-->
                </div>
            </div>
        </div>
    </div>
   @endsection
   @push('scripts')

   <!-- Flex Nav Script -->
   <script type="text/javascript" src="{{ asset('assets/frontend')}}/js/thumbnail-slider.js"></script>
   <script src="http://maps.googleapis.com/maps/api/js"></script>
   <script>
   var myCenter = new google.maps.LatLng(23.0203458, 72.5797426);

   function initialize() {
       var mapProp = {
           center: myCenter,
           zoom: 9,
           mapTypeId: google.maps.MapTypeId.ROADMAP
       };

       var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

       var marker = new google.maps.Marker({
           position: myCenter,

           icon: '{{ asset('assets/frontend')}}/images/pinkball.png'
       });

       marker.setMap(map);
       var infowindow = new google.maps.InfoWindow({
           content: "Hello Address"
       });
   }

   google.maps.event.addDomListener(window, 'load', initialize);
   </script>
   <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
   <script type="text/javascript" src="{{ asset('assets/frontend')}}/js/price-slider.js"></script>
   <script>
   $(function() {
       $("#weddingdate").datepicker();
   });
   </script>

@endpush
