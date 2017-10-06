
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
    <a href="{{ URL::to('admin/cityinfo/create') }}" class="btn btn-xs btn-success testing"><i class="glyphicon glyphicon-plus-sign"></i> Create the City</a>
        <table class="table table-striped" id="users-table" style="width: 100%;">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Division/State</th>
                    <th>Population</th>
                    <th>Action</th>
                    <!--<th>Created At</th>
                    <th>Updated At</th> -->
                </tr>
            </thead>
        </table>
    </div>
    <!-- /page content -->

    <!-- footer content -->
   <!--  <footer>
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
        ajax: '{!! url('admin/cityinfoData') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'divisionor_state_id', name: 'divisionor_state_id' },
            { data: 'population', name: 'population' },
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});
</script>
@endpush