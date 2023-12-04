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
<div class="filter-box">
    <div class="container">
        <div class="row filter-form">
            <div class="col-md-12">
                <h4>Refine Your Search</h4>
            </div>
            <form>
                <div class="col-md-3">
                    <label class="control-label" for="venuetype">Venue Type</label>
                    <select id="venuetype" name="venuetype" class="form-control">
                        <option value="">Select Venue</option>
                        <option value="Barn">Barn</option>
                        <option value="Boutique">Boutique</option>
                        <option value="Castle">Castle</option>
                        <option value="Country House">Country House</option>
                        <option value="Exclusive use">Exclusive use</option>
                        <option value="Garden weddings">Garden weddings</option>
                        <option value="Gay friendly">Gay friendly</option>
                        <option value="Gothic">Gothic</option>
                        <option value="Hotel">Hotel</option>
                        <option value="Intimate">Intimate</option>
                        <option value="Manor House">Manor House</option>
                        <option value="Marquee">Marquee</option>
                        <option value="Minimalist">Minimalist</option>
                        <option value="Modern">Modern</option>
                        <option value="Outside Weddings">Outside Weddings</option>
                        <option value="Palace">Palace</option>
                        <option value="Private School">Private School</option>
                        <option value="Romantic">Romantic</option>
                        <option value="Small">Small</option>
                        <option value="Waterside">Waterside</option>
                        <option value="Weekend">Weekend</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="control-label" for="capacity">Capacity</label>
                    <select id="capacity" name="capacity" class="form-control">
                        <option value="">Select Capacity</option>
                        <option value="0 - 99">0 - 99</option>
                        <option value="100 - 199">100 - 199</option>
                        <option value="200 - 299">200 - 299</option>
                        <option value="300 - 399">300 - 399</option>
                        <option value="400+">60 - 500</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="control-label" for="price">Price</label>
                    <select id="price" name="price" class="form-control">
                        <option value=""> Select Price</option>
                        <option value="$35 - $50">$35 - $50</option>
                        <option value="$50 - $60">$50 - $60</option>
                        <option value="$60 - $70">$60 - $70</option>
                        <option value="$70 - $80">$70 - $80</option>
                        <option value="$80 - $90">$80 - $90</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary btn-block">Refine Your Search</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mb30">
                    <h2> 12 Vendor in your search.</h2>
                </div>
            </div>
            <div class="col-md-4 vendor-box">
                <!-- venue box start-->
                <div class="vendor-image">
                    <!-- venue pic -->
                    <a href="#"><img src="{{asset('assets/frontend')}}/images/vendor-1.jpg" alt="wedding venue" class="img-responsive"></a>
                    <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
                </div>
                <!-- /.venue pic -->
                <div class="vendor-detail">
                    <!-- venue details -->
                    <div class="caption">
                        <!-- caption -->
                        <h2><a href="#" class="title">Venue Vendor Title</a></h2>
                        <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                        <div class="rating "> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                    </div>
                    <!-- /.caption -->
                    <div class="vendor-price">
                        <div class="price">$390 - $600</div>
                    </div>
                </div>
                <!-- venue details -->
            </div>
            <!-- /.venue box start-->
            <div class="col-md-4 vendor-box">
                <!-- venue box start-->
                <div class="vendor-image">
                    <!-- venue pic -->
                    <a href="#"><img src="{{asset('assets/frontend')}}/images/vendor-2.jpg" alt="wedding venue" class="img-responsive"></a>
                    <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
                </div>
                <!-- /.venue pic -->
                <div class="vendor-detail">
                    <!-- venue details -->
                    <div class="caption">
                        <!-- caption -->
                        <h2><a href="#" class="title">Venue Vendor Title</a></h2>
                        <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                        <div class="rating "> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                    </div>
                    <!-- /.caption -->
                    <div class="vendor-price">
                        <div class="price">$390 - $600</div>
                    </div>
                </div>
                <!-- venue details -->
            </div>
            <!-- /.venue box start-->
            <div class="col-md-4 vendor-box">
                <!-- venue box start-->
                <div class="vendor-image">
                    <!-- venue pic -->
                    <a href="#"><img src="{{asset('assets/frontend')}}/images/vendor-3.jpg" alt="wedding venue" class="img-responsive"></a>
                    <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
                </div>
                <!-- /.venue pic -->
                <div class="vendor-detail">
                    <!-- venue details -->
                    <div class="caption">
                        <!-- caption -->
                        <h2><a href="#" class="title">Venue Vendor Title</a></h2>
                        <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                        <div class="rating "> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                    </div>
                    <!-- /.caption -->
                    <div class="vendor-price">
                        <div class="price">$390 - $600</div>
                    </div>
                </div>
                <!-- venue details -->
            </div>
            <!-- /.venue box start-->
            <div class="col-md-4 vendor-box">
                <!-- venue box start-->
                <div class="vendor-image">
                    <!-- venue pic -->
                    <a href="#"><img src="{{asset('assets/frontend')}}/images/vendor-4.jpg" alt="wedding venue" class="img-responsive"></a>
                    <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
                </div>
                <!-- /.venue pic -->
                <div class="vendor-detail">
                    <!-- venue details -->
                    <div class="caption">
                        <!-- caption -->
                        <h2><a href="#" class="title">Venue Vendor Title</a></h2>
                        <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                        <div class="rating "> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                    </div>
                    <!-- /.caption -->
                    <div class="vendor-price">
                        <div class="price">$390 - $600</div>
                    </div>
                </div>
                <!-- venue details -->
            </div>
            <!-- /.venue box start-->
            <div class="col-md-4 vendor-box">
                <!-- venue box start-->
                <div class="vendor-image">
                    <!-- venue pic -->
                    <a href="#"><img src="{{asset('assets/frontend')}}/images/vendor-5.jpg" alt="wedding venue" class="img-responsive"></a>
                    <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
                </div>
                <!-- /.venue pic -->
                <div class="vendor-detail">
                    <!-- venue details -->
                    <div class="caption">
                        <!-- caption -->
                        <h2><a href="#" class="title">Venue Vendor Title</a></h2>
                        <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                        <div class="rating "> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                    </div>
                    <!-- /.caption -->
                    <div class="vendor-price">
                        <div class="price">$390 - $600</div>
                    </div>
                </div>
                <!-- venue details -->
            </div>
            <!-- /.venue box start-->
            <div class="col-md-4 vendor-box">
                <!-- venue box start-->
                <div class="vendor-image">
                    <!-- venue pic -->
                    <a href="#"><img src="{{asset('assets/frontend')}}/images/vendor-6.jpg" alt="wedding venue" class="img-responsive"></a>
                    <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
                </div>
                <!-- /.venue pic -->
                <div class="vendor-detail">
                    <!-- venue details -->
                    <div class="caption">
                        <!-- caption -->
                        <h2><a href="#" class="title">Venue Vendor Title</a></h2>
                        <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                        <div class="rating "> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                    </div>
                    <!-- /.caption -->
                    <div class="vendor-price">
                        <div class="price">$390 - $600</div>
                    </div>
                </div>
                <!-- venue details -->
            </div>
            <!-- /.venue box start-->
            <div class="col-md-4 vendor-box">
                <!-- venue box start-->
                <div class="vendor-image">
                    <!-- venue pic -->
                    <a href="#"><img src="{{asset('assets/frontend')}}/images/vendor-7.jpg" alt="wedding venue" class="img-responsive"></a>
                    <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
                </div>
                <!-- /.venue pic -->
                <div class="vendor-detail">
                    <!-- venue details -->
                    <div class="caption">
                        <!-- caption -->
                        <h2><a href="#" class="title">Venue Vendor Title</a></h2>
                        <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                        <div class="rating "> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                    </div>
                    <!-- /.caption -->
                    <div class="vendor-price">
                        <div class="price">$390 - $600</div>
                    </div>
                </div>
                <!-- venue details -->
            </div>
            <!-- /.venue box start-->
            <div class="col-md-4 vendor-box">
                <!-- venue box start-->
                <div class="vendor-image">
                    <!-- venue pic -->
                    <a href="#"><img src="{{asset('assets/frontend')}}/images/vendor-8.jpg" alt="wedding venue" class="img-responsive"></a>
                    <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
                </div>
                <!-- /.venue pic -->
                <div class="vendor-detail">
                    <!-- venue details -->
                    <div class="caption">
                        <!-- caption -->
                        <h2><a href="#" class="title">Venue Vendor Title</a></h2>
                        <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                        <div class="rating "> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                    </div>
                    <!-- /.caption -->
                    <div class="vendor-price">
                        <div class="price">$390 - $600</div>
                    </div>
                </div>
                <!-- venue details -->
            </div>
            <!-- /.venue box start-->
            <div class="col-md-4 vendor-box">
                <!-- venue box start-->
                <div class="vendor-image">
                    <!-- venue pic -->
                    <a href="#"><img src="{{asset('assets/frontend')}}/images/vendor-1.jpg" alt="wedding venue" class="img-responsive"></a>
                    <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
                </div>
                <!-- /.venue pic -->
                <div class="vendor-detail">
                    <!-- venue details -->
                    <div class="caption">
                        <!-- caption -->
                        <h2><a href="#" class="title">Venue Vendor Title</a></h2>
                        <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                        <div class="rating "> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                    </div>
                    <!-- /.caption -->
                    <div class="vendor-price">
                        <div class="price">$390 - $600</div>
                    </div>
                </div>
                <!-- venue details -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 tp-pagination">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous"> <span aria-hidden="true">Previous</span> </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next"> <span aria-hidden="true">NEXT</span> </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
