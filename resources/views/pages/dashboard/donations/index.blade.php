@extends('layouts.app')

@section('content')


    <div class="container mt-5">
        <!-- Display success message -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card">
            <div class="card-header">Donations Content</div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-12">
                        <div class="row g-3 align-items-center">
                            <div class="col-auto col-md-auto">
                                <select class="form-select" name="bulk_action" id="bulk_action">
                                    <option value="">Bulk Action</option>
                                    <option value="1">Move to Trash</option>
                                </select>
                            </div>
                            <div class="col-auto col-md-auto">
                                <button type="button" id="bulk_submit" name="bulk_submit"
                                    class="btn btn-light border">Apply</button>
                            </div>
                            <div class="col text-end">
                                <a href="#" id="view_export" name="view_export" class="btn btn-primary border float-right"
                                    data-bs-toggle="modal" data-bs-target="#getReportModal"><i class="fa fa-download"></i>
                                    Get
                                    Export</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12">
                        <table id="pages_list" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr class="action_area">
                                    <th class="tbl_col1"><input type="checkbox" class="form-check-input" id="check_all"
                                            name="check_all" /></th>
                                    <th>Donation ID</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Amount</th>
                                    <th>Payment Type</th>
                                    <th>Status</th>
                                    <th>Confirmation</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($donations)
                                    @foreach ($donations as $donation)
                                                        <tr class="action_area">
                                                            <td><input type="checkbox" class="form-check-input" name="check_single" /></td>
                                                            <td>
                                                                <span>{{ $donation->id }}</span>
                                                                <div class="btn_action_area">
                                                                    {{-- <a href="{{ route('admin.editorder',$donation->id) }}"
                                                                        target="_self">Edit</a> --}}
                                                                    @if ($donation->status != '0')
                                                                        <a href="#" class="text-danger product_trash"
                                                                            data-id="{{ $donation->id }}">Trash</a>
                                                                    @endif

                                                                    {{-- <a href="#" class="order_view" data-id="{{ $donation->id }}">View</a> --}}
                                                                </div>
                                                            </td>
                                                            <td>{{ $donation->first_name }} {{ $donation->last_name }}</td>
                                                            <td>{{ $donation->email }}</td>
                                                            <td>${{ number_format($donation->amount, 2) }}</td>
                                                            <td>{{ ucfirst($donation->payment_type) }}</td>
                                                            <td><span
                                                                    class="badge text-bg-{{ $donation->status == '1' ? 'primary' : 'danger' }} text-capitalize">{{ $donation->status }}</span>
                                                            </td>
                                                            <td><span
                                                                    class="badge bg-{{ $donation->confirmation == '1' ? 'success' : 'secondary' }}">
                                                                    {{ ucfirst($donation->confirmation == '1' ? 'completed' : 'cancelled') }}
                                                                </span></td>
                                                            <td>
                                                                <div class="publish_badge">Donated</div>
                                                                <div class="date_time">{{
                                        \Carbon\Carbon::parse($donation->updated_at)->format('Y/m/d \a\t g:i a') }}
                                                                </div>
                                                            </td>
                                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                            <tfoot>
                                <tr class="action_area">
                                    <th class="tbl_col1"><input type="checkbox" class="form-check-input"
                                            id="check_all_footer" name="check_all" /></th>
                                    <th>Donation ID</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Amount</th>
                                    <th>Payment Type</th>
                                    <th>Status</th>
                                    <th>Confirmation</th>
                                    <th>Date</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="viewModel" tabindex="-1" aria-labelledby="viewModelLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewModelLabel">Display Items</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="viewModelBody">
                    <p>There are no anythings to display</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                        id="viewModelBtnCalcel">Close</button>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('css')
    <style>

    </style>
@endpush

@push('scripts')
    <script>
        $(document).ready(function () {
            // Select all checkboxes when clicking on "Select All" checkbox
            $('#check_all').on('click', function () {
                const isChecked = $(this).prop('checked');
                $('#check_all_footer').prop('checked', isChecked);
                $('input[name="check_single"]').prop('checked', isChecked);
            });

            $('#check_all_footer').on('click', function () {
                const isChecked = $(this).prop('checked');
                $('#check_all').prop('checked', isChecked);
                $('input[name="check_single"]').prop('checked', isChecked);
            });

            // Apply bulk action button functionality (optional)
            $('#bulk_submit').on('click', function () {
                const selectedAction = $('#bulk_action').val();
                const selectedItems = $('input[name="check_single"]:checked');

                if (selectedItems.length > 0 && selectedAction !== '') {
                    // Handle bulk action (Move to Trash or other actions)
                    alert(`Applying "${selectedAction}" to ${selectedItems.length} items.`);
                } else {
                    alert('Please select items and choose an action.');
                }
            });

            $('.order_view').on('click', function () {
                let order_id = $(this).data('id');
                console.log("Selected Order ID: ", order_id);
                var ajax_url = "{{ route('admin.fetchorderitems', ':id') }}";
                ajax_url = ajax_url.replace(':id', order_id);

                var myViewModal = new bootstrap.Modal(document.getElementById('viewModelBody'));

                var csrf_token = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: ajax_url,
                    method: 'GET',
                    data: {
                        _token: csrf_token // Include CSRF token in the data
                    },
                    success: function (response) {
                        console.log(response);
                        if (response.status == 1) {
                            $('#viewModelBody').html(response.items);
                        } else {
                            $('#viewModelBody').html('<h5>There are no any Order Items to display here</h5>');
                        }
                        myViewModal.show();
                    },
                    error: function (err) {
                        $('#viewModelBody').html('<h5>Order Items Fetching Error</h5>');
                        myViewModal.show();
                        console.log(err);
                    }
                });

            });

            $('.product_trash').on('click', function () {
                let product_id = $(this).data('id'); // Use .data() instead of .attr()
                console.log("Selected product ID: ", product_id);

                var ajax_url = "{{ route('admin.deletedonation', ':id') }}";
                ajax_url = ajax_url.replace(':id', product_id);

                // Call the AlertModelDetails function
                AlertModelDetails(
                    'Confirm Deletion',
                    'Are you sure you want to Disable this Donation?',
                    'Cancel',
                    'Delete',
                    product_id,
                    ajax_url,
                    'POST'
                );

                // Ensure the delete confirmation button works correctly
                $('#alertModelBtnOk')
                    .off('click') // Remove previous bindings to prevent duplicate event triggers
                    .on('click', function () {
                        if ($('#alertModel form input[name="_method"]').length === 0) {
                            $('#alertModel form').append('<input type="hidden" name="_method" value="DELETE">');
                        }
                        $('#alertModel form').submit();
                    });
            });

            //$('#alertModelBtnOk').on('submit', function(e) {
            //e.preventDefault();
            //$.redirect(""+ajax_url+"", {product_id: product_id}, "DELETE", "_self");

            // var csrf_token = $('meta[name="csrf-token"]').attr('content');
            // $.ajax({
            //     url: ajax_url,
            //     method: 'DELETE',
            //     data: {
            //         _token: csrf_token // Include CSRF token in the data
            //     },
            //     success: function(response) {
            //         myModal.hide(); // Hide the modal
            //         Swal.fire({
            //             position: 'top-end',
            //             icon: 'success',
            //             title: 'product is deleted!',
            //             showConfirmButton: false,
            //             timer: 3500
            //         });
            //         // Optionally, you can remove the row from the table here.
            //         $('#product_row_' + product_id).remove(); // This is assuming each product has a row with an id `product_row_X`
            //     },
            //     error: function(err) {
            //         myModal.hide(); // Hide the modal
            //         Swal.fire({
            //             position: 'top-end',
            //             icon: 'error',
            //             title: 'Something went wrong!',
            //             showConfirmButton: false,
            //             timer: 3500
            //         });
            //     }
            // });
            //});

        });
    </script>
@endpush