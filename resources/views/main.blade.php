<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') - SIM Inkubator Bisnis ITK</title>
    <link rel="icon" type="image/png" href="./assets/img/ibt_logo.png">
    <link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    {{-- plugin ckeditor --}}
    <script type="text/javascript" src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    
    <script src="{{ asset('style/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('style/assets/js/main.js') }}"></script>

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="">
                    <img src="{{ asset('/assets/img/logo_ibt4.png') }}">
                    {{-- Inkubator Bisnis dan Teknologi ITK --}}
                </a>
                <a class="navbar-brand hidden" href="">IB</a>
            </div>
            <br>
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav"> 
                    <li>
                        <div class="text-muted">
                            <h5>Dashboard</h5>
                    </li>
                    <li>
                        <a href="{{url('profile')}}" class="nav-link">
                            <i class="menu-icon fa fa-user"></i>
                            Profil
                        </a>
                    </li>
                    <li>
                        <a href="{{url('organization')}}" class="nav-link">
                            <i class="menu-icon fa fa-handshake-o"></i>
                            Organisasi
                        </a>
                    </li>
                    <li>
                        <a href="{{url('programs')}}" class="nav-link">
                            <i class="menu-icon fa fa-sitemap"></i>
                            Program Inkubasi
                        </a>
                    </li>
                    <li>
                        <a href="{{url('news')}}" class="nav-link">
                            <i class="menu-icon fa fa-newspaper-o"></i>
                            Berita
                        </a>
                    </li>
                    <li>
                        <a href="{{url('contact')}}" class="nav-link">
                            <i class="menu-icon fa fa-phone"></i>
                            Contact Us
                        </a>
                    </li>
                    
                    <li>
                        <div class="text-muted">
                            <h5>Forms</h5>
                        </div>
                    </li>
                    <li>
                        <a href="{{url('regisTenant')}}" class="nav-link">
                            <i class="menu-icon fa fa-server"></i>
                            Pendaftaran Tenant
                        </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <div id="right-panel" class="right-panel">
        {{-- <header id="header" class="header"> --}}
        <header class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>
                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="/" class="btn btn-outline-secondary nav-link dropdown-toggle" data-toggle="dropdown">
                            Account
                            <i class="fa fa-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start rounded" style="margin-top:42px; margin-left:-50px">
                            <h6 class="dropdown-header">ibtitk@gmail.com</h6>
                            {{-- <a class="dropdown-item" href="/" style="color: red">Logout</a> --}}
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <a style="color: red">Logout</a>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        
        @yield('breadcrumbs')

        @yield('content')

    </div>    

</body>
</html>