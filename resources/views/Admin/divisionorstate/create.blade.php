

@extends('Admin.layouts.blank')

@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('main_container')
    <!-- page content -->
    <div class="right_col" role="main">
        <h1>Create a Nerd</h1>
        {{ Form::open(array('url' => 'admin/divisionorstate','files' => true)) }}

            <div class="form-group">
                {{ Form::label('category', 'Category') }}
                {{ Form::select('category',[ 'division' => 'Division','state' => 'State'],Input::old('category'),['class' => 'form-control']
                )}}
            </div>
            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('latitude', 'Latitude') }}
                {{ Form::text('latitude', Input::old('latitude'), array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('longitude', 'Longitude') }}
                {{ Form::text('longitude', Input::old('longitude'), array('class' => 'form-control')) }}
            </div>
            <!-- <div class="form-group">
                {{ Form::label('email', 'Email') }}
                {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
            </div> -->

            <!-- <div class="form-group">
                {{ Form::label('nerd_level', 'Nerd Level') }}
                {{ Form::select('nerd_level', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), Input::old('nerd_level'), array('class' => 'form-control')) }}
            </div> -->

            {{ Form::submit('Create the Division', array('class' => 'btn btn-primary')) }}
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
