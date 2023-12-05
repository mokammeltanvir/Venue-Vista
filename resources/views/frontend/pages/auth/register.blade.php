@extends('frontend.layouts.master')
@section('title', 'Register')
@section('content')
<div class="tp-page-head">
    <!-- page header -->
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="page-header text-center">
                    <div class="icon-circle">
                        <i class="icon icon-size-60 icon-curtains icon-white"></i>
                    </div>
                    <h1>Are you Supplier - Start Business</h1>
                    <p>Wedding Vendor works with thousands of wedding vendors worldwide.</p>
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
                    <li class="active">Sing Up Vendor</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="well-box">
                    <form action="{{ route('register.store') }}" method="post">
                        @csrf
                        <div class="account-form form-style">
                            <!-- Text input-->
                            <div class="form-group">
                            <p>User Name <span class="text-danger">*</span></p>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                            <p>User Phone <span class="text-danger">*</span></p>
                            <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                            <p>User Email Address <span class="text-danger">*</span></p>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                            <p>Password <span class="text-danger">*</span></p>
                            <input type="Password" name="password" class="form-control @error('email') is-invalid @enderror">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                            <p>Confirm Password <span class="text-danger">*</span></p>
                            <input type="Password" name="password_confirmation" class="form-control @error('email') is-invalid @enderror">
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                           <!-- Button -->
                           <div class="form-group">
                            <button name="submit" class="btn btn-primary btn-lg">Register</button>
                            <a href="{{route('login.page')}}" class="btn btn-sm pull-right"> <small>Already Register ?</small></a>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="feature-block feature-left">
                            <div class="well-box">
                                <div class="feature-icon"><i class="icon-love-letter icon-size-60 icon-default"></i></div>
                                <div class="feature-content">
                                    <h3>Questions ? Contact us </h3>
                                    <p>Can't get any answer am poenatis condimentum. Fusce risus odiamrper at, lacinia vel leo.</p>
                                    <a href="#" class="btn btn-default btn-sm">Help Center</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="feature-block feature-left">
                            <div class="well-box">
                                <div class="feature-icon"><i class="icon-list-3 icon-size-60 icon-default"></i></div>
                                <div class="feature-content">
                                    <h3>Wedding Pricing</h3>
                                    <p>View our pricing table enenatis conntum. Fusce risus odio, egestas sit amet usllamcornia vel leo.</p>
                                    <a href="#" class="btn btn-default btn-sm">View Pricing</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
