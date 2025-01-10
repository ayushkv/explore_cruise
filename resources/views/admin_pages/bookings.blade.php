@extends('layouts.admin_layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Bookings</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Bookings</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title color-red"><b>Bookings Info</b></h3>
                            </div>

                            <!-- The modal structure -->
                            <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-md">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="viewModalLabel">Booking Info</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Modal content will be loaded here dynamically -->
                                            <div id="modal-body-content">
                                                <!-- Content dynamically populated by JS -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="b_table" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Contact No</th>
                                            <th>Destination</th>
                                            <th>Created At</th>
                                            <th><center>Action</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Data will be loaded dynamically via AJAX -->
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

@section('script')
    <script>
        $(document).ready(function() {
            // DataTable
            var table = $('#b_table').DataTable({
                serverSide: true,
                lengthMenu: [
                    [10, 50, 100, -1],
                    [10, 50, 100, 'All']
                ],
                pagingType: 'full_numbers',
                language: {
                    paginate: {
                        first: '«',
                        previous: '‹',
                        next: '›',
                        last: '»'
                    },
                    aria: {
                        paginate: {
                            first: 'First',
                            previous: 'Previous',
                            next: 'Next',
                            last: 'Last'
                        }
                    }
                },

                // "scrollY": true,
                // "scrollX": true,
                "processing": true,
                // "stateSave": true,

                "stripeClasses": ['odd-row', 'even-row'],
                ajax: {
                    'url': '{{ route('bookings.data') }}',
                    'type': 'get',
                },

                "columns": [{
                        "data": "DT_RowIndex"
                    },
                    {
                        "data": "name"
                    },
                    {
                        "data": "phone"
                    },
                    {
                        "data": "destination"
                    },
                    {
                        "data": "created_at",
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return `<center><button class="btn btn-info btn-sm" onclick="viewBooking(${row.id})"><i class="fas fa-eye"></i>  </button></center>`;
                        }
                    }

                ],

                // "order": [
                //     [9, 'desc']
                // ],

            });

            table.on('draw.dt', function() {
                var info = table.page.info();
                table.column(0, {
                    search: 'applied',
                    order: 'applied',
                    page: 'applied'
                }).nodes().each(function(cell, i) {
                    cell.innerHTML = i + 1 + info.start;
                });
            });

        });

        function viewBooking(id) {
            $.ajax({
                url: '/admin/bookings/' + id,
                type: 'GET',
                success: function(response) {
                    var booking = response.booking; 

                    var modalContent = `
                    <div class="row">
                        <div class="col-md-3 mt-2 mb-2"><b>Name :</b></div>
                        <div class="col-md-9 mt-2 mb-2">${booking.name}</div>
                        
                        <div class="col-md-3 mt-2 mb-2"><b>Email :</b></div>
                        <div class="col-md-9 mt-2 mb-2">${booking.email}</div>

                        <div class="col-md-3 mt-2 mb-2"><b>Phone :</b></div>
                        <div class="col-md-9 mt-2 mb-2">${booking.phone}</div>

                        <div class="col-md-3 mt-2 mb-2"><b>Destination :</b></div>
                        <div class="col-md-9 mt-2 mb-2">${booking.destination}</div>

                        <div class="col-md-3 mt-2 mb-2"><b>Cruise Length :</b></div>
                        <div class="col-md-9 mt-2 mb-2">${booking.cruise_length}</div>

                        <div class="col-md-3 mt-2 mb-2"><b>Booking Date :</b></div>
                        <div class="col-md-9 mt-2 mb-2">${booking.date}</div>

                        <div class="col-md-3 mt-2 mb-2"><b>Cruise Line :</b></div>
                        <div class="col-md-9 mt-2 mb-2">${booking.cruise_line}</div>
                    </div>
                `;

                    $('#modal-body-content').html(modalContent);
                    $('#viewModal').modal('show');
                }
            });
        }
    </script>
@endsection
