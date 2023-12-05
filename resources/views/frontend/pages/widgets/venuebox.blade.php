<div class="section-space80 bg-light">
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
            @foreach ($venues as $venue)

            <div class="col-md-4 vendor-box">
                <div class="vendor-image">
                    <!-- venue pic -->
                    <a href="#"><img src="{{asset('uploads/venue_photos')}}/{{$venue->venue_image}}" alt="wedding venue" class="img-responsive"></a>
                    <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
                </div>
                <!-- /.venue pic -->
                <div class="vendor-detail">
                    <!-- venue details -->
                    <div class="caption">
                        <!-- caption -->
                        <h2><a href="#" class="title">{{$venue->venue_name}}</a></h2>
                        <p class="location"><i class="fa fa-map-marker"></i>{{$venue->venue_address}}</p>
                        <div class="rating "> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count"></span> </div>
                    </div>
                    <!-- /.caption -->
                    <div class="vendor-price">
                        <div class="price">৳ {{$venue->venue_price}}</div>
                    </div>
                </div>
                <!-- venue details -->
            </div>
            <!-- /.venue box start-->
            @endforeach
        </div>

        <div class="row">
            <div class="col-md-12 text-center"><a href="#" class="btn btn-default btn-lg">View All Vendor</a></div>
        </div>
    </div>
</div>
