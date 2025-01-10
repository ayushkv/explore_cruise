@extends('layouts.admin_layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Enquiries</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Enquiries</li>
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
                                <h3 class="card-title color-red"><b>Enquiries Info</b></h3>
                            </div>
                            
                            <!-- The modal structure -->
                            <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-md">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="viewModalLabel">Enquiry Info</h4>
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
                                <table id="e_table" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Contact No</th>
                                            <th>Date</th>
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
            var table = $('#e_table').DataTable({
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

                // "stripeClasses": ['odd-row', 'even-row'],
                ajax: {
                    'url': '/admin/enquiries/data',
                    'type': 'get',
                },

                "columns": [{
                        data: "id"
                    },
                    {
                        data: "name"
                    },
                    {
                        data: "email"
                    },
                    {
                        data: "phone"
                    },
                    {
                        data: "created_at",
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return `<center><button class="btn btn-info btn-sm" onclick="viewBooking(${row.id})"><i class="fas fa-eye"></i>  </button>
                            <button class="btn btn-danger btn-sm" onclick="deleteEnquiry(${row.id})"><i class="fas fa-trash-alt"></i> </button></center>`;
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
                url: '/admin/enquiries/'+id,
                type: 'GET',
                success: function(response) {
                    var enq = response.enq; 

                    var modalContent = `
                    <div class="row">
                        <div class="col-md-3 mt-2 mb-2"><b>Name :</b></div>
                        <div class="col-md-9 mt-2 mb-2">${enq.name}</div>
                        
                        <div class="col-md-3 mt-2 mb-2"><b>Email :</b></div>
                        <div class="col-md-9 mt-2 mb-2">${enq.email}</div>

                        <div class="col-md-3 mt-2 mb-2"><b>Phone :</b></div>
                        <div class="col-md-9 mt-2 mb-2">${enq.phone}</div>

                        <div class="col-md-3 mt-2 mb-2"><b>Message :</b></div>
                        <div class="col-md-9 mt-2 mb-2">${enq.message}</div>
                    </div>
                `;

                    $('#modal-body-content').html(modalContent);
                    $('#viewModal').modal('show');
                }
            });
        }
        
        function deleteEnquiry(id) {
            if (confirm('Are you sure you want to delete this enquiry?')) {
                $.ajax({
                    url: '/admin/enquiry/' + id,
                    type: 'GET',
                    success: function(response) {
                        // Reload the DataTable after successful deletion
                        $('#e_table').DataTable().ajax.reload();
                        if(response.success == "success"){
                         toastr.success(response.msg)
                        }
                    },
                    error: function(error) {
                        alert('There was an error deleting the enquiry.');
                    }
                });
            }
        }
    </script>
@endsection
