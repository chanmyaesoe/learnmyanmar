

@extends('Admin.layouts.blank')

@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('main_container')
    <!-- page content -->
    <div class="right_col" role="main">
        {{ Form::model($slides, array('route' => array('slides.update', $slides->id), 'method' => 'PUT','files' => true)) }}

            
            <div class="form-group">
                {{ Form::label('title', 'title') }}
                {{ Form::text('title', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('description', 'Description') }}
                {{ Form::textarea('description', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('img', 'Image') }}
                {{ Form::file('img',null, ['class' => 'field']) }}
            </div>

            {{ Form::submit('Edit the Nerd!', array('class' => 'btn btn-primary')) }}
            <a href="{{ URL::previous() }}" class="btn btn-primary">Back</a>
        {{ Form::close() }}
    </div>
    <!-- /page content -->

    <!-- footer content -->
    <footer>
        <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
@endsection
