@extends('frontend.layouts.master')
@section('title', 'About')

@section('content')
<div class="tp-page-head">
    <!-- page header -->
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="page-header text-center">
                    <div class="icon-circle"> <i class="icon icon-size-60 icon-loving-home icon-white"></i> </div>
                    <h1>About Wedding Vendor</h1>
                    <p>Fusce volutpat turpis sit amet justo venenatis vestibul leo augue, molestie nec lacus utemper rhoncus arcuoin auctor sodales interdum.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.page header -->
<div class="tp-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">About Wedding Vendor</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12 content-right">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aboutus" id="aboutus">
                            <h1>We are Weddings Finder.</h1>
                            <p class="lead">Welcome to wedding vendor, launch in 2015. We pride our selves on being a trusted friend someone to take on this journey with you making it fun from the start.</p>
                            <p>We will support you and advise you. We are never short of suggestions or inspiring ideas.Our matchless, which makes finding beautiful wedding venue easier and one less thing for you to worry about.With our inspir blog, suggestions and sensational offers, no one understands weddings better than we do.</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="call-to-action well-box mt30">
                            <h1>Online Wedding Planning </h1>
                            <h3 class="point">Advice &amp; Guide. | Save your date. | Forever free.</h3>
                            <img src="{{asset('assets/frontend')}}/images/cycle-graphic.png" alt="" class="graphic img-responsive"> <a href="#" class="btn btn-default btn-lg">Get start today</a> </div>
                    </div>
                    <div class="col-md-12 team-section" id="team">
                        <h1>Our Founder</h1>
                        <div class="row">
                            <div class="col-md-4"><img src="{{asset('assets/frontend')}}/images/founder.jpg" alt="" class="img-responsive img-circle"></div>
                            <div class="col-md-8">
                                <h2>Tisha chauhan</h2>
                                <p>Nullam pellentesque congue ante ellentesque eget odio faucibus laoreet at pulvinar augueras ornare tincidunt nibh sodales tempus urabitur justo elit laoreet sed elit quis auctor placerat magna.</p>
                                <p>Find her on Twitter at <a href="#">@tishachauhan</a></p>
                            </div>
                        </div>
                        <div class="row team-section">
                            <div class="col-md-3 text-center team-block">
                                <div class="team-pic">
                                    <!-- team pic -->
                                    <a href="#"><img src="{{asset('assets/frontend')}}/images/team-pic1.jpg" class="img-responsive" alt=""></a>
                                </div>
                                <!-- /.team pic -->
                                <h2><a href="#">Zella Drake</a></h2>
                                <span>Chief Executive Officer</span>
                                <div class=""> <a href="#"><i class="fa fa-twitter-square"></i></a> <a href="#"><i class="fa fa-linkedin-square"></i></a> </div>
                            </div>
                            <div class="col-md-3 text-center team-block">
                                <div class="team-pic">
                                    <!-- team pic -->
                                    <a href="#"><img src="{{asset('assets/frontend')}}/images/team-pic7.jpg" class="img-responsive" alt=""></a>
                                </div>
                                <!-- /.team pic -->
                                <h2><a href="#">Marie Ashcroft</a></h2>
                                <span>Chief Executive Officer</span>
                                <div class=""> <a href="#"><i class="fa fa-twitter-square"></i></a> <a href="#"><i class="fa fa-linkedin-square"></i></a> </div>
                            </div>
                            <div class="col-md-3 text-center team-block">
                                <div class="team-pic">
                                    <!-- team pic -->
                                    <a href="#"><img src="{{asset('assets/frontend')}}/images/team-pic8.jpg" class="img-responsive" alt=""></a>
                                </div>
                                <!-- /.team pic -->
                                <h2><a href="#">Avery Moseley</a></h2>
                                <span>Chief Executive Officer</span>
                                <div class=""> <a href="#"><i class="fa fa-twitter-square"></i></a> <a href="#"><i class="fa fa-linkedin-square"></i></a> </div>
                            </div>
                            <div class="col-md-3 text-center team-block">
                                <div class="team-pic">
                                    <!-- team pic -->
                                    <a href="#"><img src="{{asset('assets/frontend')}}/images/team-pic2.jpg" class="img-responsive" alt=""></a>
                                </div>
                                <!-- /.team pic -->
                                <h2><a href="#">Jimmie Tucker</a></h2>
                                <span>Chief Executive Officer</span>
                                <div class=""> <a href="#"><i class="fa fa-twitter-square"></i></a> <a href="#"><i class="fa fa-linkedin-square"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 how-it-works" id="howwork">
                        <h1>How It Works</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac purus eleifend, eleifend risus feugiat, consectetur extiam fermentum ligula ipsumincipsum dolor sit quis nisi dolor. </p>
                        <div class="row">
                            <div class="col-md-6 how-it-desc">
                                <h2>Find the Vender</h2>
                                <p>Sed id mollis exnteger eu veeger eu vehicula exliquam ultrices quis sem sed rutrumpendisse potentt laoreet faucibusus.</p>
                            </div>
                            <div class="col-md-4 text-center how-it-icon"> <img src="{{asset('assets/frontend')}}/images/vendor-1.svg" alt=""> </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 text-center how-it-icon"> <img src="{{asset('assets/frontend')}}/images/list.svg" alt=""> </div>
                            <div class="col-md-6 how-it-desc">
                                <h2>Compare Proposal</h2>
                                <p>Integer eu vehicula ex. Aliquam ultrices quis sem sed rutrum. Suspendisse potenti. Nam commodo nisi ut laoreet faucibus.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 how-it-desc">
                                <h2>Hire the Right Vender</h2>
                                <p>Aliquam ultrices quis sem sed rutrumpendisse potenti. Nam commodo nisi ut laoreet faucibus lacus neque mollis nequeue libero at quam. </p>
                            </div>
                            <div class="col-md-4 text-center how-it-icon"> <img src="{{asset('assets/frontend')}}/images/vendor-done.svg" alt=""> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
