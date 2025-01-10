@extends('layouts.admin_layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pages Meta</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Pages Meta</li>
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
                                <h3 class="card-title color-red"><b>Pages Meta Info</b></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="table1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="30">#</th>
                                            <th>Page Name</th>
                                            <th>Meta Title</th>
                                            <th>
                                                <center>Action</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($seo_pages as $key => $page)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $page->oth_name }}</td>
                                                <td>{{ $page->oth_seo_title }}</td>
                                                <td>
                                                    <center><button class="btn btn-warning btn-sm color-white"
                                                            data-toggle="modal"
                                                            data-target="#edit_page{{ $page->id }}"><i
                                                                class="fas fa-edit"></i></button></center>
                                                </td>
                                            </tr>
                                        @endforeach
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

    @foreach ($seo_pages as $page)
        <!-- /.modal -->
        <div class="modal fade" id="edit_page{{ $page->id }}" aria-modal="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Page Meta</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form method="post" acrtion="{{ route('seo_pages_update') }}">
                        @csrf
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="page">Page Name</label>
                                        <input type="hidden" name="page_id" value="{{ $page->id }}" />
                                        <input type="text" class="form-control" id="page"
                                            value="{{ $page->oth_name }}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="title">Meta Title</label>
                                        <input type="text" class="form-control" name="title" id="title"
                                            placeholder="Meta Title" value="{{ $page->oth_seo_title }}" minlength="3"
                                            maxlength="200" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="keyword">Meta Keyword</label>
                                        <input type="text" class="form-control" name="keyword" id="keyword"
                                            placeholder="Meta Title" value="{{ $page->oth_seo_keys }}" minlength="3"
                                            maxlength="200">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="desc">Meta Description</label>
                                        <input type="text" class="form-control" name="desc" id="desc"
                                            placeholder="Meta Description" value="{{ $page->oth_seo_desc }}" minlength="3"
                                            maxlength="500">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    @endforeach
@endsection
@section('script')
    <script>
        $(function() {
            $('#table1').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
