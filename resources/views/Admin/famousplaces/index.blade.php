@extends('Admin.layouts.blank')
@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
    <!-- <link href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet"> -->
<!-- <link href="https://cdn.datatables.net/1.10.15/css/dataTables.jqueryui.min.css" rel="stylesheet"> -->
@endpush

@section('main_container')
    <!-- page content -->
    <div class="right_col" role="main">
    <a href="{{ URL::to('admin/famousplaces/create') }}" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-plus-sign"></i> Create Famous Place</a>
        <table class="table table-striped" id="users-table" style="width: 100%;">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Image</th>
                    <th>Action</th>
                    <!--<th>Created At</th>
                    <th>Updated At</th> -->
                </tr>
            </thead>
        </table>
    </div>
    <!-- /page content -->

    <!-- footer content -->
    <!-- <footer>
        <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
    </footer> -->
    <!-- /footer content -->
@endsection
@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! url('admin/famousplacesData') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'cityinfo_id', name: 'cityinfo_id' },
            { data: 'img', name: 'img' },
            { data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});
</script>
@endpush