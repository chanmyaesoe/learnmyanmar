<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <link rel="icon" type="image/png" href="{{ URL::to('/') }}/images/learnmmlogo.png">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Learn Myanmar</title>
        <!-- Bootstrap -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="{{ asset('css/gentelella.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/jquery/jquery-ui.min.css') }}" rel="stylesheet">
        <!-- <link href="{{ asset("css/jquery/jquery.dataTables.min.css") }}" rel="stylesheet"> -->
        <link href="{{ asset('css/jquery/dataTables.jqueryui.min.css') }}" rel="stylesheet">
        @stack('stylesheets')
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                @include('Admin/includes/sidebar')

                @include('Admin/includes/topbar')

                @yield('main_container')
            </div>
        </div>
        <!-- jQuery -->
        <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('js/jquery/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('js/jquery/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('js/jquery/dataTables.jqueryui.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- Custom Theme Scripts -->
        <script src="{{ asset('js/gentelella.min.js') }}"></script>
        
        
        @stack('scripts')

    </body>
</html>