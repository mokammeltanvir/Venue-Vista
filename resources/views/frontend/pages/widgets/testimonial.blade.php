<div class="section-space80">
    <!-- Testimonial Section -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title mb60 text-center">
                    <h1>Just Get Married Happy Couple</h1>
                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 tp-testimonial">
                <div id="testimonial" class="owl-carousel owl-theme">
                    @foreach ($testimonials as $testimonial)

                    <div class="item testimonial-block">
                        <div class="couple-pic"><img src="{{asset('uploads/testimonials')}}/{{$testimonial->client_image}}" alt="" class="img-circle"></div>
                        <div class="feedback-caption">
                            <p>"{{$testimonial->client_message}}"</p>
                        </div>
                        <div class="couple-info">
                            <div class="name">{{$testimonial->client_name}}</div>
                            <div class="date">{{$testimonial->client_designation}}</div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /. Testimonial Section -->
