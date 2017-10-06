@extends('Admin.layouts.blank')
@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush
@section('main_container')
    <!-- page content -->
    <div class="right_col" role="main">
        @if( isset($cityinfo) )
            {{ Form::model($cityinfo, array('route' => array('cityinfo.update', $cityinfo->id), 'method' => 'PUT','files' => true)) }}
        @else
            {{ Form::open(array('url' => 'admin/cityinfo','files' => true)) }}
        @endif
            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
                @if ($errors->has('name'))
                <span class="text-danger">{{$errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('divisionor_state_id', 'Division/State') }}
                <select name="divisionor_state_id" class="form-control">
                    @foreach($divisionorstates as $divisionorstate)
                   @foreach($divisionorstates as $divisionorstate)
                 <option value="{{ $divisionorstate->id }}" {{ (in_array($divisionorstate->id, $selected)) ? ' selected="selected"' : '' }}>{{ $divisionorstate->name}}</option>
                @endforeach
                    @endforeach
                </select>
                @if ($errors->has('divisionor_state_id'))
                <span class="text-danger">{{ $errors->first('divisionor_state_id') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('population', 'Population') }}
                {{ Form::text('population', Input::old('population'), array('class' => 'form-control')) }}
                @if ($errors->has('population'))
                <span class="text-danger">{{ $errors->first('population') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('latitude', 'Latitude') }}
                {{ Form::text('latitude', Input::old('latitude'), array('class' => 'form-control')) }}
                @if ($errors->has('latitude'))
                <span class="text-danger">{{ $errors->first('latitude') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('longitude', 'Longitude') }}
                {{ Form::text('longitude', Input::old('longitude'), array('class' => 'form-control')) }}
                @if ($errors->has('longitude'))
                <span class="text-danger">{{ $errors->first('longitude') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('img', 'Image') }}
                {{ Form::file('img', ['class' => 'field']) }}
                @if ($errors->has('img'))
                <span class="text-danger">{{ $errors->first('img') }}</span>
                @endif
            </div>
            {{ Form::submit('Create a city', array('class' => 'btn btn-primary')) }}
            <a href="{{ URL::to('admin/cityinfo') }}" class="btn btn-default">Back</a>
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

