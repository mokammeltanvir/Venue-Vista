@extends('frontend.layouts.master')
@section('title', 'Customer Dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Welcome to Customer Dashboard</h1>
                <p>Hello, {{ auth()->user()->name }}</p>
                <p>Email: {{ auth()->user()->email }}</p>
            </div>

        </div>
    </div>
@endsection
