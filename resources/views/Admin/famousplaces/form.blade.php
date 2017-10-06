@extends('Admin.layouts.blank')
@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush
@section('main_container')
    <!-- page content -->
    <div class="right_col" role="main">
        @if( isset($famousplace) )
            {{ Form::model($famousplace, array('route' => array('famousplaces.update', $famousplace->id), 'method' => 'PUT','files' => true)) }}
        @else
            {{ Form::open(array('url' => 'admin/famousplaces','files' => true)) }}
        @endif
            <div class="form-group">
                {{ Form::label('name', 'Name',array('class' => 'name')) }}
                {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
                @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('cityinfo_id', 'City') }}
                <select name="cityinfo_id" class="form-control">
                    @foreach($cityinfos as $cityinfo)
                     <option value="{{ $cityinfo->id }}" {{ (in_array($cityinfo->id, $selected)) ? ' selected="selected"' : '' }}>{{ $cityinfo->name}}</option>
                    @endforeach
                </select>
                @if ($errors->has('cityinfo_id'))
                <span class="text-danger">{{ $errors->first('cityinfo_id') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('img', 'Image') }}
                {{ Form::file('img', ['class' => 'field']) }}
                @if ($errors->has('img'))
                <span class="text-danger">{{ $errors->first('img') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('lat', 'Latitude') }}
                {{ Form::text('lat', Input::old('lat'), array('class' => 'form-control')) }}
                @if ($errors->has('lat'))
                <span class="text-danger">{{ $errors->first('lat') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('long', 'Longitude') }}
                {{ Form::text('long', Input::old('long'), array('class' => 'form-control')) }}
                @if ($errors->has('long'))
                <span class="text-danger">{{ $errors->first('long') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('description', 'Description') }}
                {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
                @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
            </div>
            {{ Form::submit('Create Famous Place', array('class' => 'btn btn-primary')) }}
            <a href="{{ URL::to('admin/famousplaces') }}" class="btn btn-default">Back</a>
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

