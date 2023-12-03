
@extends('frontend.layouts.master')
@section('title', 'Single Venue')
@section('content')
    <div id="slider" class="owl-carousel owl-theme slider">
        <div class="item">
            <div class="slider-pic"><img src="images/hero-image-2.jpg" alt="Mirror Edge"></div>
        </div>
        <div class="item">
            <div class="slider-pic"><img src="images/venue-pic-3.jpg" alt="Wedding couple pic"></div>
        </div>
        <div class="item">
            <div class="slider-pic"><img src="images/venue-pic.jpg" alt="The Last of us"></div>
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
            <div class="col-md-12 title"> <a href="#" class="label-primary">Boutique</a>
                <h1>Wedding Venue Title Goes Here</h1>
                <p class="location"><i class="fa fa-map-marker"></i>110 Pennington Street, London E1W 2BB</p>
            </div>
            <div class="col-md-8 rating-box">
                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
            </div>
            <div class="col-md-4 venue-action"> <a href="#googleMap" class="btn btn-primary">VIEW MAP</a> <a href="#inquiry" class="btn btn-default">Book Venue</a> </div>
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
                    <!-- comments -->
                    <div class="customer-review">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Couples Review</h1>
                                <div class="review-list">
                                    <!-- First Comment -->
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 hidden-xs">
                                            <div class="user-pic"> <img class="img-responsive img-circle" src="images/userpic.jpg" alt=""> </div>
                                        </div>
                                        <div class="col-md-10 col-sm-10">
                                            <div class="panel panel-default arrow left">
                                                <div class="panel-body">
                                                    <div class="text-left">
                                                        <h3>The whole experience was Excellent</h3>
                                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                    </div>
                                                    <div class="review-post">
                                                        <p> From initially being shown round through booking to breakfast the next morning. Nam eu enim mollis urna egestas interdum eget quis nisl. Ut sem velit, scelerisque nec commodo consequat, imperdiet non diam. </p>
                                                    </div>
                                                    <div class="review-user">By <a href="#">Jaisy and Kartin</a>, on <span class="review-date"></span>04 Apr 2015</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Second Comment -->
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 hidden-xs">
                                            <div class="user-pic"> <img class="img-responsive img-circle" src="images/userpic.jpg" alt=""> </div>
                                        </div>
                                        <div class="col-md-10 col-sm-10">
                                            <div class="panel panel-default arrow left">
                                                <div class="panel-body">
                                                    <div class="text-left">
                                                        <h3>The Facilities were Fantastic!</h3>
                                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                    </div>
                                                    <div class="review-post">
                                                        <p> Curabitur mattis congue consectetur. Nulla facilisis dictum velit, ultrices imperdiet diam luctus quis. Vestibulum in volutpat purus, quis accumsan diam. The pastry heart on the pie was such a lovely touch that you could easily not have done. </p>
                                                    </div>
                                                    <div class="review-user">By <a href="#">Jaisy and Kartin</a>, on <span class="review-date"></span>04 Apr 2015</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Third Comment -->
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 hidden-xs">
                                            <div class="user-pic"> <img class="img-responsive img-circle" src="images/userpic.jpg" alt=""> </div>
                                        </div>
                                        <div class="col-md-10 col-sm-10">
                                            <div class="panel panel-default arrow left">
                                                <div class="panel-body">
                                                    <div class="text-left">
                                                        <h3> Aenean elementum dictum estsit amet ullamcorper</h3>
                                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                    </div>
                                                    <div class="review-post">
                                                        <p> Vivamus condimentum orci non tellus tincidunt volutpat. Suspendisse gravida gravida arcu a pellentesque. Duis aliquet ut justo et accumsan. </p>
                                                    </div>
                                                    <div class="review-user">By <a href="#">Jaisy and Kartin</a>, on <span class="review-date"></span>04 Apr 2015</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="review">
                                    <a class="btn btn-primary btn-block btn-lg" role="button" data-toggle="collapse" href="#review" aria-expanded="false" aria-controls="review"> Write A Review </a> </div>
                                <div class="collapse review-list review-form" id="review">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <h1>Write Your Review</h1>
                                            <form class="">
                                                <div class="rating-group">
                                                    <div class="radio radio-success radio-inline">
                                                        <input type="radio" name="radio1" id="radio1" value="option2">
                                                        <label for="radio1" class="radio-inline"> <span class="rating"><i class="fa fa-star"></i></span> </label>
                                                    </div>
                                                    <div class="radio radio-success radio-inline">
                                                        <input type="radio" name="radio1" id="radio2" value="option3">
                                                        <label for="radio2" class="radio-inline"> <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </label>
                                                    </div>
                                                    <div class="radio radio-success radio-inline">
                                                        <input type="radio" name="radio1" id="radio3" value="option3">
                                                        <label for="radio3" class="radio-inline"> <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </label>
                                                    </div>
                                                    <div class="radio radio-success radio-inline">
                                                        <input type="radio" name="radio1" id="radio4" value="option4">
                                                        <label for="radio4" class="radio-inline"> <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </label>
                                                    </div>
                                                    <div class="radio radio-success radio-inline">
                                                        <input type="radio" name="radio1" id="radio5" value="option5">
                                                        <label for="radio5" class="radio-inline"> <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </label>
                                                    </div>
                                                </div>
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="control-label" for="name">Name</label>
                                                    <div class="">
                                                        <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required>
                                                    </div>
                                                </div>
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="control-label" for="email">E-Mail</label>
                                                    <div class=" ">
                                                        <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md" required>
                                                    </div>
                                                </div>
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class=" control-label" for="reviewtitle">Review Title</label>
                                                    <div class=" ">
                                                        <input id="reviewtitle" name="reviewtitle" type="text" placeholder="Review Title" class="form-control input-md" required>
                                                    </div>
                                                </div>
                                                <!-- Textarea -->
                                                <div class="form-group">
                                                    <label class=" control-label">Write Review</label>
                                                    <div class="">
                                                        <textarea class="form-control" rows="8">Write Review</textarea>
                                                    </div>
                                                </div>
                                                <!-- Button -->
                                                <div class="form-group">
                                                    <button name="submit" class="btn btn-primary btn-lg">Submit Review</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.comments -->
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
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="well-box" id="inquiry">
                                <h2>Send Enquiry to Vendor</h2>
                                <p>Fill in your details and a Venue Specialist will get back to you shortly.</p>
                                <form class="">
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="control-label" for="name-one">Name:<span class="required">*</span></label>
                                        <div class="">
                                            <input id="name-one" name="name" type="text" placeholder="Name" class="form-control input-md" required>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="control-label" for="phone">Phone:<span class="required">*</span></label>
                                        <div class="">
                                            <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" required>
                                            <span class="help-block"> </span> </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="control-label" for="email-one">E-Mail:<span class="required">*</span></label>
                                        <div class="">
                                            <input id="email-one" name="email" type="text" placeholder="E-Mail" class="form-control input-md" required>
                                        </div>
                                    </div>
                                    <!-- Select Basic -->
                                    <div class="default-calender">
                                        <div class="form-group">
                                            <label class="control-label" for="weddingdate">Wedding Date<span class="required">*</span></label>
                                            <div class="">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="weddingdate" placeholder="Wedding Date">
                                                    <span class="input-group-addon" id="basic-addon2"><i class="fa fa-calendar"></i></span> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="guest">Number of Guests:<span class="required">*</span></label>
                                        <div class="">
                                            <select id="guest" name="guest" class="form-control">
                                                <option value="35 to 50">35 to 50</option>
                                                <option value="50  to 65">50 to 65</option>
                                                <option value="65 to 85">65 to 85</option>
                                                <option value="85 to 105">85 to 105</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Multiple Radios -->
                                    <div class="form-group">
                                        <label class="control-label">Send me info via</label>
                                        <div class="checkbox checkbox-success">
                                            <input type="checkbox" name="checkbox" id="checkbox-0" value="1" class="styled">
                                            <label for="checkbox-0" class="control-label"> E-Mail </label>
                                        </div>
                                        <div class="checkbox checkbox-success">
                                            <input type="checkbox" name="checkbox" id="checkbox-1" value="2" class="styled">
                                            <label for="checkbox-1" class="control-label"> Need Call back </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button name="submit" class="btn btn-default btn-lg btn-block">Book MY Venue now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="profile-sidebar well-box">
                                <!-- SIDEBAR USERPIC -->
                                <div class="profile-userpic"> <img src="images/profile_user.jpg" class="img-responsive img-circle" alt=""> </div>
                                <div class="profile-usertitle">
                                    <div class="profile-usertitle-name">
                                        <h2>John Wilburn</h2>
                                    </div>
                                    <div class="profile-address"> <i class="fa fa-map-marker"></i> Studio spaces,110 Pennington, London, E1W 2BB </div>
                                    <div class="profile-website"> <i class="fa fa-link"></i> <a href="#">http://www.myvenue.com</a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="social-sidebar side-box">
                                <ul class="listnone follow-icon">
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="googleMap" class="map"></div>
    <div class="section-space60">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb30">
                    <h1>Recommend Venues for your Date</h1>
                </div>
                <div class="col-md-4 vendor-box">
                    <!-- venue box start-->
                    <div class="vendor-image">
                        <!-- venue pic -->
                        <a href="#"><img src="images/vendor-1.jpg" alt="wedding venue" class="img-responsive"></a>
                    </div>
                    <!-- /.venue pic -->
                    <div class="vendor-detail">
                        <!-- venue details -->
                        <div class="caption">
                            <!-- caption -->
                            <h2><a href="#" class="title">Venue Vendor Title</a></h2>
                            <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                        </div>
                        <!-- /.caption -->
                        <div class="vendor-price">
                            <div class="price">$390 - $600</div>
                        </div>
                    </div>
                    <!-- venue details -->
                </div>
                <div class="col-md-4 vendor-box">
                    <!-- venue box start-->
                    <div class="vendor-image">
                        <!-- venue pic -->
                        <a href="#"><img src="images/vendor-2.jpg" alt="wedding venue" class="img-responsive"></a>
                    </div>
                    <!-- /.venue pic -->
                    <div class="vendor-detail">
                        <!-- venue details -->
                        <div class="caption">
                            <!-- caption -->
                            <h2><a href="#" class="title">Venue Vendor Title</a></h2>
                            <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                        </div>
                        <!-- /.caption -->
                        <div class="vendor-price">
                            <div class="price">$390 - $600</div>
                        </div>
                    </div>
                    <!-- venue details -->
                </div>
                <div class="col-md-4 vendor-box">
                    <!-- venue box start-->
                    <div class="vendor-image">
                        <!-- venue pic -->
                        <a href="#"><img src="images/vendor-3.jpg" alt="wedding venue" class="img-responsive"></a>
                    </div>
                    <!-- /.venue pic -->
                    <div class="vendor-detail">
                        <!-- venue details -->
                        <div class="caption">
                            <!-- caption -->
                            <h2><a href="#" class="title">Venue Vendor Title</a></h2>
                            <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                        </div>
                        <!-- /.caption -->
                        <div class="vendor-price">
                            <div class="price">$390 - $600</div>
                        </div>
                    </div>
                    <!-- venue details -->
                </div>
            </div>
        </div>
    </div>

@endsection
