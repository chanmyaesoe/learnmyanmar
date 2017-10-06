

@extends('Admin.layouts.blank')

@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('main_container')
    <!-- page content -->
    <div class="right_col" role="main">
        {{ Form::model($divisionorstates, array('route' => array('divisionorstate.update', $divisionorstates->id), 'method' => 'PUT','files' => true)) }}
            <div class="form-group">
                {{ Form::label('category', 'category') }}
                {{ Form::select('category',[ 'division' => 'Division','state' => 'State'],null,['class' => 'form-control']
                )}}
            </div>
            <div class="form-group">
                {{ Form::label('name', 'name') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('latitude', 'latitude') }}
                {{ Form::text('latitude', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('longitude', 'longitude') }}
                {{ Form::text('longitude', null, array('class' => 'form-control')) }}
            </div>
            {{ Form::submit('Edit the Nerd!', array('class' => 'btn btn-primary')) }}
            <a href="{{ URL::previous() }}" class="btn btn-primary">Back</a>
        {{ Form::close() }}
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
