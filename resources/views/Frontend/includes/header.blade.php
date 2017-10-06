<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Learn Myanmar</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        
        <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
        <meta property="og:title" content="">
        <meta property="og:image" content="">
        <meta property="og:url" content="">
        <meta property="og:site_name" content="">
        <meta property="og:description" content="">
        
        <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="">
        <meta name="twitter:title" content="">
        <meta name="twitter:description" content="">
        <meta name="twitter:image" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/icons/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icons/114x114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icons/72x72.png">
        <link rel="apple-touch-icon-precomposed" href="img/icons/default.png">
      
        <!-- Google Fonts -->
        <link href="{{ asset('https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owlcarousel/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owlcarousel/owl.theme.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owlcarousel/owl.transitions.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="#" id="colour-scheme" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @stack('stylesheets')
    </head>
    <body class="page-index has-hero">
        <div id="background-wrapper" class="buildings" data-stellar-background-ratio="0.1">
      
      <!-- ======== @Region: #navigation ======== -->
      <div id="navigation" class="wrapper">
        <!--Hidden Header Region-->
        
        <!--Header & navbar-branding region-->
        <div class="header">
          <div class="header-inner container">
            <div class="row">
              <div class="col-md-12">
                <!--navbar-branding/logo - hidden image tag & site name so things like Facebook to pick up, actual logo set via CSS for flexibility -->
                <a class="navbar-brand" href="index.html" title="Home">
                  <h1 class="hidden">
                    <img src="img/logo.png" alt="Flexor Logo">
                  </h1>
                </a>
                
              </div>
              <!--header rightside-->
              
            </div>
          </div>
        </div>
        <div class="container">
          <div class="navbar navbar-default">
            <!--mobile collapse menu button-->
            
            <!--social media icons-->
            
            <!--everything within this div is collapsed on mobile-->
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav" id="main-menu">
                <li class="icon-link">
                  <a href="/"><i class="fa fa-home"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cities<b class="caret"></b></a>
                  <!-- Dropdown Menu -->
                  <ul class="dropdown-menu">
                    @foreach ($cityinfos as $cityinfo)
                      <li><a href="{{route('citydetail',  ['id' => $cityinfo->id])}}" tabindex="-1" class="menu-item">{{$cityinfo->name}}</a></li>
                    @endforeach
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<b class="caret"></b></a>
                  <!-- Dropdown Menu -->
                  <ul class="dropdown-menu">
                    <li class="dropdown-header">Flexor Version Pages</li>
                    <li><a href="elements.html" tabindex="-1" class="menu-item">Elements</a></li>
                    <li><a href="about.html" tabindex="-1" class="menu-item">About / Inner Page</a></li>
                    <li><a href="login.html" tabindex="-1" class="menu-item">Login</a></li>
                    <li><a href="register.html" tabindex="-1" class="menu-item">Sign-Up</a></li>
                    <li class="dropdown-footer">Dropdown footer</li>
                  </ul>
                </li>
                <li><a href="#">Menu Link</a></li>
                <li class="dropdown dropdown-mm">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mega Menu<b class="caret"></b></a>
                  <!-- Dropdown Menu -->
                  <ul class="dropdown-menu dropdown-menu-mm dropdown-menu-persist">
                    <li class="row">
                      <ul class="col-md-6">
                        <li class="dropdown-header">Websites and Apps</li>
                        <li><a href="#">Analysis and Planning</a></li>
                        <li><a href="#">User Experience / Information Architecture</a></li>
                        <li><a href="#">User Interface Design / UI Design</a></li>
                        <li><a href="#">Code &amp; Development / Implementation &amp; Support</a></li>
                      </ul>
                      <ul class="col-md-6">
                        <li class="dropdown-header">Enterprise solutions</li>
                        <li><a href="#">Business Analysis</a></li>
                        <li><a href="#">Custom UX Consulting</a></li>
                        <li><a href="#">Quality Assurance</a></li>
                      </ul>
                    </li>
                    <li class="dropdown-footer">
                      <div class="row">
                        <div class="col-md-7">Like the lite version? <strong>Get the extended version of Flexor.</strong></div>
                        <div class="col-md-5">
                          <a href="https://bootstrapmade.com" class="btn btn-more btn-lg pull-right"><i class="fa fa-cloud-download"></i> Get It Now</a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <!--/.navbar-collapse -->
          </div>
        </div>
      </div>
                @yield('frontend_container')
        <!-- jQuery -->
        <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/stellar/stellar.min.js') }}"></script>
        <script src="{{ asset('js/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('js/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="{{ asset('js/color-switcher.js') }}"></script>
        
        
        @stack('scripts')
        </div>
    </body>
</html>