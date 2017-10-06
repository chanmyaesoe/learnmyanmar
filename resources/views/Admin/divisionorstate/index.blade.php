@extends('Admin.layouts.blank')
@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush
@section('main_container')
    <!-- page content -->
    <div class="right_col" role="main">
    <a href="{{ URL::to('admin/divisionorstate/create') }}" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-plus-sign"></i> Create a Division/State</a>
        <table class="table table-striped" id="users-table" style="width: 100%;">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
        </table>
    </div>
@endsection

@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! url('admin/divisionorstateData') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'category', name: 'category' },
            { data: 'name', name: 'name' },
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});
</script>
@endpush