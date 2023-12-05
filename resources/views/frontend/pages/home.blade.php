@extends('frontend.layouts.master')
@section('title', 'Home')

@section('content')
<!-- Slider -->
@include('frontend.pages.widgets.slider')
<!-- /.End of Slider -->

<div class="section-space80">
    <!-- Feature Blog Start -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title mb60 text-center">
                    <h1>Plan your wedding one step at a time</h1>
                    <p>Simple wedding planning tools to help you stay on track. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- feature center -->
            <div class="col-md-3">
                <div class="feature-block feature-center mb30">
                    <!-- feature block -->
                    <div class="feature-icon"> <i class="icon icon-size-60 icon-calendar icon-default"></i></div>
                    <h2>Checklist</h2>
                    <p>Get your planning sorted with our free wedding planning checklist!</p>
                </div>
            </div>
            <!-- /.feature block -->
            <div class="col-md-3">
                <div class="feature-block feature-center mb30">
                    <!-- feature block -->
                    <div class="feature-icon"><i class="icon icon-size-60 icon-budget icon-default"></i></div>
                    <h2>Budget Planner</h2>
                    <p>Budget estimator tool that lets you specify your program plan.</p>
                </div>
            </div>
            <!-- /.feature block -->
            <div class="col-md-3">
                <div class="feature-block feature-center mb30">
                    <!-- feature block -->
                    <div class="feature-icon"><i class="icon icon-size-60 icon-group icon-default"></i></div>
                    <h2>Guest list</h2>
                    <p>Build your free wedding guest list, collect mailing addresses and RSVPs.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-block feature-center mb30">
                    <!-- feature block -->
                    <div class="feature-icon"><i class="icon icon-size-60 icon-table icon-default"></i></div>
                    <h2>Table Planer</h2>
                    <p>Easy online tool for creating seating arrangements for weddings.</p>
                </div>
            </div>
            <!-- /.feature block -->
        </div>
        <!-- /.feature center -->
        <div class="row">
            <div class="col-md-12 text-center"> <a href="#" class="btn btn-primary">Get Started</a> </div>
        </div>
    </div>
</div>
<!-- Feature Blog End -->
<!-- Venue Box Start -->
@include('frontend.pages.widgets.venuebox')
<!-- Testimonial Section -->
@include('frontend.pages.widgets.testimonial')
<!-- /. Testimonial Section -->
<section class="module parallax parallax-2">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 parallax-caption">
                <h2>Are you trying our planning tools ?</h2>
                <p>Donec sagittis blandit ex consequat pulvinm condimentum tortor lorem ipsum oleo sit ament eitae suscipit augupibus. </p>
                <a href="#" class="btn btn-primary">Start Planning Today</a> </div>
        </div>
    </div>
</section>
<div class="section-space80 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title mb60 text-center">
                    <h1>Most Reason to Why Choose us</h1>
                    <p>Donec sagittis blandit ex consequat pulvinm condimentum tortor eitae suscipit augupibus </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="well-box feature-block text-center">
                    <div class="feature-icon"><i class="icon-heart-4 icon-size-60 icon-light"></i></div>
                    <div class="feature-info">
                        <h3>20 Years Experiance</h3>
                        <p>We are never short of suggestions or inspiring ideas.We will support you and advise you.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="well-box feature-block text-center">
                    <div class="feature-icon"><i class="icon-newly-married-couple icon-size-60 icon-light"></i></div>
                    <div class="feature-info">
                        <h3>100 real weddings</h3>
                        <p>Every wedding is unique and has a special story. Share all the details of your special moments.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="well-box feature-block text-center">
                    <div class="feature-icon"><i class="icon-curtains icon-size-60 icon-light"></i></div>
                    <div class="feature-info">
                        <h3>1500 + Wedding Suppliers</h3>
                        <p> Sed semper sapien commodo iaculis nec quis lacus malesuada, icula tortor. ut turpiliquepellentesque. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

