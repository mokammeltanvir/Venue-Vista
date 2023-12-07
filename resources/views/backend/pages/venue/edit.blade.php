@extends('backend.layouts.master')

@section('title', 'Venue Update')

@push('admin_style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css"
        integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@section('admin_content')
    <div class="row">
        <h1>Venue Update Form</h1>
        <div class="col-12">
            <div class="d-flex justify-content-start">
                <a href="{{ route('venue.index') }}" class="btn btn-primary">
                    <i class="fas fa-backward"></i>
                    Back to Venue
                </a>
            </div>
        </div>

        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('venue.update', $venue->venue_slug) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="row">
                            <!-- Locations Section -->
                            <div class="col-12 mb-3">
                                <label for="location-name" class="form-label">Select Locations</label>
                                <select name="location_id" class="form-select" velue="">
                                    @foreach ($locations as $location)
                                        <option value="{{ $location->id }}"
                                            @if ($venue->location_id == $location->id )
                                            selected
                                            @endif
                                        >{{ $location->location_name }}</option>
                                    @endforeach
                                </select>
                                </select>
                                @error('location_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Locations Section -->

                            <!-- Venue Name Section -->
                            <div class="col-12 mb-3">
                                <label for="venue-name" class="form-label">Venue Name</label>
                                <input type="text" name="venue_name" value="{{ $venue->venue_name }}"
                                    class="form-control @error('venue_name') is-invalid @enderror"
                                    placeholder="enter venue name">
                                @error('venue_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Product Name Section -->


                            <!-- Venue Price and Capacity Section -->
                            <div class="col-6 mb-3">
                                <label for="venue-price" class="form-label">Venue Price</label>
                                <input type="number" name="venue_price" min="0" value="{{ $venue->venue_price }}"
                                    class="form-control @error('venue_price') is-invalid @enderror" id="venue_price">
                                @error('venue_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-6 mb-3">
                                <label for="venue-capacity" class="form-label">Venue capacity</label>
                                <input type="number" name="venue_capacity" min="0" value="{{ $venue->venue_capacity }}"
                                    class="form-control @error('venue_capacity') is-invalid @enderror" id="venue_capacity">
                                @error('venue_capacity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Venue Price and Capacity Section -->


                            <!-- Venue Description -->
                            <div class="col-12 mb-3">
                                <label for="venue-address" class="form-label">Venue Address</label>
                                <input type="text" name="venue_address" min="0" value="{{ $venue->venue_address }}"
                                    class="form-control @error('venue_address') is-invalid @enderror" id="venue_address">
                                @error('venue_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label for="venue-description" class="form-label">Venue Description</label>
                                <textarea name="venue_description" class="form-control @error('venue_description') is-invalid @enderror" id="venue_description" id="" cols="30" rows="5">{{ $venue->venue_description }}</textarea>
                                @error('venue_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Venue Description -->

                            <!-- Product Additional Info Description -->
                            <div class="col-12 mb-3">
                                <label for="additional-info" class="form-label">Additional Info</label>
                                <textarea name="additional_info" class="form-control @error('additional_info') is-invalid @enderror" id="additional_info" id="" cols="30" rows="5">{{$venue->additional_info}}</textarea>
                                @error('additional_info')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Product Additional info Description -->



                            <!-- Venue Image Section -->

                            <div class="col-12 mb-3">
                                <label for="venue-image" class="form-label">Venue Image</label>
                                <input type="file" class="form-control dropify" name="venue_image" data-default-file="{{ asset('uploads/venue_photos') }}/{{ $venue->venue_image }}">
                                @error('venue_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Venue Image Section -->

                            <!-- Venue Multiple Image Section -->
                            <div class="col-12 mb-3">
                                <label for="venue-image" class="form-label">Venue Multiple Image</label>
                                <input type="file" class="form-control" multiple name="venue_multiple_image[]">
                                @error('venue_multiple_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Venue Multiple Image Section -->

                            <div class="col-6 mb-3 form-check form-switch">
                                <input class="form-check-input" name="is_active" type="checkbox" role="switch"
                                    id="activeStatus"
                                    @if ($venue->is_active)
                                        checked
                                    @endif>
                                <label class="form-check-label" for="activeStatus">Active or Inactive</label>
                                @error('venue_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mt-5">
                                <button type="submit" class="btn btn-warning">Update</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('admin_script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
        integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.dropify').dropify();
    </script>
@endpush
