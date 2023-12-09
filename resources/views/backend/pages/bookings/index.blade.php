@extends('backend.layouts.master')

@section('title') Booking List @endsection

@push('admin_style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

    <style>
        .dataTables_length {
            padding: 20px 0;
        }
    </style>
@endpush

@section('admin_content')
    <div class="row">
        <h1>Booking List Table</h1>

        <div class="col-12">
            <div class="table-responsive my-2">
                @if ($bookings && count($bookings) > 0)
                    <table class="table table-hover" id="dataTable">
                        <thead class="text-primary">
                            <th>#</th>
                            <th>View Details</th>
                            <th>Booking Date</th>
                            <th>Shift</th>
                            <th>Event Name</th>
                            <th>Total Amount (BDT)</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $booking)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#modal{{ $booking->id }}">Booking Details</button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="modal{{ $booking->id }}" tabindex="-1" role="dialog"
                                            aria-labelledby="modal{{ $booking->id }}Title" aria-hidden="true">
                                            <div class="modal-dialog modal-fullscreen" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modal{{ $booking->id }}Title">Booking
                                                            Number #{{ $booking->id }}</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <table
                                                                        class="table table-striped table-inverse table-responsive">
                                                                        <thead class="thead-inverse">
                                                                            <tr>
                                                                                <th>#</th>
                                                                                <th>Venue Name</th>
                                                                                <th>Location</th>
                                                                                <th>Event Name</th>
                                                                                <th>Event Date</th>
                                                                                <th>Shift</th>
                                                                                <th>Start Time</th>
                                                                                <th>End Time</th>
                                                                                <th>Num of Guest</th>
                                                                                <th>Event Description</th>
                                                                                <th>Services Need</th>
                                                                                <th>Booking Status</th>
                                                                                <th>Venue Price</th>
                                                                                <th>Payment Status</th>
                                                                                <th>Payment Method</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                         <tr>
                                                        <td>{{ $loop->index+1 }}</td>
                                                        <td>{{ $booking->venue->venue_name }}</td>
                                                         <td>{{ $booking->venue->venue_address }}</td>
                                                         <td>{{ $booking->event_name }}</td>
                                                            <td>{{ $booking->booking_date }}</td>
                                                            <td>{{ $booking->shift }}</td>
                                                            <td>{{ date('h:i A', strtotime($booking->start_time)) }}</td>
                                                            <td>{{ date('h:i A', strtotime($booking->end_time)) }}</td>

                                                            <td>{{ $booking->no_of_guests }}</td>
                                                            <td>{{ $booking->additional_info }}</td>

                                                            <td> @foreach ($booking->services as $service)
                                                                {{ $service }}
                                                                @if (!$loop->last)
                                                                    ,
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                            <td>{{ $booking->status }}</td>
                                                            <td>{{ $booking->venue->venue_price }}</td>
                                                            <td>{{ $booking->payment_status }}</td>
                                                            <td>{{ $booking->payment_method }}</td>
                                                             </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $booking->booking_date }}</td>
                                    <td>{{ $booking->shift }}</td>
                                    <td>{{ $booking->event_name }}</td>
                                    <td>{{ $booking->venue->venue_price }}</td>
                                    <td>
                                        <form action="{{ route('admin.bookings.approve', $booking) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-success">Approve</button>
                                        </form>
                                        <form action="{{ route('admin.bookings.reject', $booking) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger">Reject</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $bookings->links() }}
                @else
                    <p>No bookings found.</p>
                @endif
            </div>
        </div>
    </div>
@endsection

@push('admin_script')
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.20/dist/sweetalert2.all.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable({
                pagingType: 'first_last_numbers',
            });

            $('.show_confirm').click(function (event) {
                let form = $(this).closest('form');

                event.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            });
        });
    </script>
@endpush
