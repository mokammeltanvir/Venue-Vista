@extends('backend.layouts.master')

@section('title', 'Edit Location')

@push('admin_style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@section('admin_content')
<div class="row">
    <h1>Location Edit Form</h1>
    <div class="col-12">
        <div class="d-flex justify-content-start">
            <a href="{{ route('location.index') }}" class="btn btn-primary">
                <i class="fas fa-backward"></i>
                Back to Locations
            </a>
        </div>
    </div>

    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('location.update', $location->location_slug) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="location-name" class="form-label">Location Name</label>
                        <input type="text" name="location_name" value="{{ $location->location_name }}" class="form-control @error('location_name')
                            is-invalid
                        @enderror" placeholder="enter location name" id="">
                        @error('location_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="location-image" class="form-label">Location Image</label>
                        <input type="file" class="form-control dropify" name="location_image" data-default-file="{{ asset('uploads/locations') }}/{{ $location->location_image }}">
                        @error('location_image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3 form-check form-switch">
                        <input class="form-check-input" name="is_active" type="checkbox" role="switch" id="activeStatus"
                        @if ($location->is_active)
                            checked
                        @endif>
                        <label class="form-check-label" for="activeStatus">Active or Inactive</label>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="btn btn-warning">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('admin_script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.dropify').dropify();
</script>
@endpush
