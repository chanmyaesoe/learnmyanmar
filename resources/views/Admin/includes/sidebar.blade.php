<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ url('/') }}" class="site_title"><img src="{{ URL::to('/') }}/images/learnmmlogo.png" alt="Learn Myanmar" class="main-logo"> <span>Learn Myanmar</span></a>
        </div>
        
        <!-- <div class="clearfix"></div> -->
        
        <!-- menu profile quick info -->
        <!-- <div class="profile">
            <div class="profile_pic">
                <img src="{{ Gravatar::src(Auth::user()->email) }}" alt="Avatar of {{ Auth::user()->name }}" class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }}</h2>
            </div>
        </div> -->
        <!-- /menu profile quick info -->
        
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <br />
                <br />
                <!-- <h3>Group 1</h3> -->
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Multiple link <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Link 1</a></li>
                            <li><a href="#">Link 2</a></li>
                            <li><a href="#">Link 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('admin/divisionorstate') }}">
                            <i class="fa fa-slideshare"></i>
                            Division/State
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/cityinfo') }}">
                            <i class="fa fa-laptop"></i>
                            City Info
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/slides') }}">
                            <i class="fa fa-slideshare"></i>
                            Slides
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/famousplaces') }}">
                            <i class="fa fa-slideshare"></i>
                            Famous Places
                        </a>
                    </li>
                </ul>
            </div>
            <!-- <div class="menu_section">
                <h3>Group 2</h3>
                <ul class="nav side-menu">
                    <li>
                        <a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="#">Level One</a>
                                <li>
                                    <a>Level One<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li class="sub_menu">
                                            <a href="#">Level Two</a>
                                        </li>
                                        <li>
                                            <a href="#">Level Two</a>
                                        </li>
                                        <li>
                                            <a href="#">Level Two</a>
                                        </li>
                                    </ul>
                                </li>
                            <li>
                                <a href="#">Level One</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div> -->
        
        </div>
        <!-- /sidebar menu -->
        
        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ url('/admin/logout') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>