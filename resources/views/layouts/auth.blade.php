<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
    {{-- <div class="main-one">

        <main class="py-4">
            @include('partials.navbar')

            @include('partials.messages')
            @yield('content')

            @include('partials.footer')
        </main>
    
    </div> --}}
    <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
              <!-- Left navbar links -->
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                  {{-- <a href="index3.html" class="nav-link">Home</a> --}}
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                  {{-- <a href="#" class="nav-link">Contact</a> --}}
                </li>
              </ul>
          
              
              <!-- Right navbar links -->
              <ul class="navbar-nav ml-auto">
                
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-danger navbar-badge">15</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                      <i class="fas fa-envelope mr-2"></i> 4 new messages
                      <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                      <i class="fas fa-users mr-2"></i> 8 friend requests
                      <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                      <i class="fas fa-file mr-2"></i> 3 new reports
                      <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                      class="fas fa-th-large"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  data-slide="true" href="#">
                        <img src="dist/img/user8-128x128.jpg" class="img-size-50 img-circle mr-3">
                    </a>
                </li>
                <li class="nav-item">   
                    <a class="nav-link"  data-slide="true" href="#">
                        <strong>ENG</strong>
                    </a>
                </li>
                <!-- Authentication Links -->
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Hi There <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
              </ul>
            </nav>
            <!-- /.navbar -->
          
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
              {{-- <!-- Brand Logo -->{{ url('/') }} --}}
            <a class="navbar-brand" href="#">
                {{ config('app.name', 'Laravel') }}
                <img src="/img/lagos2.jpeg" alt=" Logo" class="brand-image img-circle elevation-3"
                     style="opacity: .8"> 
                    {{-- <span class="brand-text font-weight-light">Cedaview</span> --}}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
          
              <!-- Sidebar -->
              <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                  </div>
                  <div class="info">
                    <a href="#" class="d-block">Tosin Shittu</a>
                  </div>
                </div>
          
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library  has-treeview menu-open-->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                            DASHBOARD
                            {{-- <i class="right fas fa-angle-left"></i> --}}
                            </p>
                        </a>
                    </li>
                    {{-- divider --}}
                    <hr>
                    {{-- divider --}}
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-circle"></i>
                        <p>
                          PROFILE
                          {{-- <i class="right fas fa-angle-left"></i> --}}
                        </p>
                      </a>
                    </li>
                    {{-- divider --}}
                    <hr>
                    {{-- divider --}}
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                            NEWS
                            {{-- <i class="right fas fa-angle-left"></i> --}}
                            </p>
                        </a>
                    </li>
                     {{-- divider --}}
                     <hr>
                     {{-- divider --}}
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                          APPLICATION
                          <span class="right badge badge-danger">New</span>
                        </p>
                      </a>
                    </li>
                     {{-- divider --}}
                     <hr>
                     {{-- divider --}}
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                            RESOURCES
                            <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                    </li>
                     {{-- divider --}}
                     <hr>
                     {{-- divider --}}
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                            PROGRAMS
                            <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                    </li>
                  </ul>
                </nav>
                <!-- /.sidebar-menu -->
              </div>
              <!-- /.sidebar -->
            </aside>
          
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
              <!-- Content Header (Page header) -->
              <div class="content-header">
                <div class="container-fluid">
                  <div class="row mb-2">
                    <div class="col-sm-6">
                      <h4 class="m-0 text-dark">Dashboard</h4>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/homepage">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                      </ol>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.container-fluid -->
              </div>
              <!-- /.content-header -->
          
              <!-- Main content -->
              <div class="content">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-12">
                      {{-- <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
          
                          <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's
                            content.
                          </p>
          
                          <a href="#" class="card-link">Card link</a>
                          <a href="#" class="card-link">Another link</a>
                        </div>
                      </div> --}}
          
                      <div class="card card-primary card-outline">
                        <div class="card-body">
                          <h5 class="card-title"><i>DASHBOARD</i></h5>
                            
                            {{-- <div class="alert alert-danger w-50 h-35" role="alert">
                                <p class="text-center" >Kindly Update Your Status!</p>
                            </div> --}}
                            {{-- dashboard --}}

                            <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                      <div class="card card-stats card-success">
                                        <div class="card-header card-header-warning card-header-icon">
                                          <div class="card-icon">
                                            <i class="material-icons">APPLICATIONS</i>
                                          </div>
                                          <p class="card-category">Used Space</p>
                                          <h3 class="card-title">49/50
                                            <small>GB</small>
                                          </h3>
                                        </div>
                                        {{-- <div class="card-footer card-success">
                                          <div class="stats">
                                            <i class="material-icons text-danger">warning</i>
                                            <a href="">Get More Space...</a>
                                          </div>
                                        </div> --}}
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                      <div class="card card-stats card-danger">
                                        <div class="card-header card-header-success card-header-icon">
                                          <div class="card-icon">
                                            <i class="material-icons">RESOURCES</i>
                                          </div>
                                          <p class="card-category">Revenue</p>
                                          <h3 class="card-title">$34,245</h3>
                                        </div>
                                        {{-- <div class="card-footer">
                                          <div class="stats">
                                            <i class="material-icons">date_range</i> Last 24 Hours
                                          </div>
                                        </div> --}}
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                      <div class="card card-stats card-success">
                                        <div class="card-header card-header-danger card-header-icon">
                                          <div class="card-icon">
                                            <i class="material-icons">EVENTS/PROGRAMS</i>
                                          </div>
                                          <p class="card-category">Fixed Issues</p>
                                          <h3 class="card-title">75</h3>
                                        </div>
                                        {{-- <div class="card-footer">
                                          <div class="stats card-dange">
                                            <i class="material-icons">local_offer</i> Tracked from Github
                                          </div>
                                        </div> --}}
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                      <div class="card card-stats card-danger">
                                        <div class="card-header card-header-info card-header-icon">
                                          <div class="card-icon">
                                            <i class="fas fa-user-circle"></i>
                                          </div>
                                          <p class="card-category">ALL YOUTH </p>
                                          <h3 class="card-title">245</h3>
                                        </div>
                                        {{-- <div class="card-footer">
                                          <div class="stats">
                                            <i class="material-icons">update</i> Just Updated
                                          </div>
                                        </div> --}}
                                      </div>
                                    </div>
                                  </div>
                            {{-- dashboard --}}

                            @yield('content')
                            

                        </div>
                      </div><!-- /.card -->
                    </div>
                    <!-- /.col-md-6 -->
                    {{-- <div class="col-lg-6"> --}}
                      {{-- <div class="card">
                        <div class="card-header">
                          <h5 class="m-0">Featured</h5>
                        </div>
                        <div class="card-body">
                          <h6 class="card-title">Special title treatment</h6>
          
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div> --}}
          
                      {{-- <div class="card card-primary card-outline">
                        <div class="card-header">
                          <h5 class="m-0">Featured</h5>
                        </div>
                        <div class="card-body">
                          <h6 class="card-title">Special title treatment</h6>
          
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div> --}}
                    <!-- /.col-md-6 -->
                  </div>
                  <!-- /.row -->
                </div><!-- /.container-fluid -->
              </div>
              <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
          
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
              <!-- Control sidebar content goes here -->
              <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
              </div>
            </aside>
            <!-- /.control-sidebar -->
          
            <!-- Main Footer -->
            <footer class="main-footer">
              <!-- To the right -->
              {{-- <div class="float-right d-none d-sm-inline">
                
              </div> --}}
              <!-- Default to the left -->
              <strong>Copyright &copy; 2019 <a href="#"></a>Cedaview.</strong> All rights reserved.
            </footer>
          </div>
          <!-- ./wrapper -->
          
          <!-- REQUIRED SCRIPTS -->
          
          <!-- jQuery -->
          <script src="plugins/jquery/jquery.min.js"></script>
          <!-- Bootstrap 4 -->
          <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
          <!-- AdminLTE App -->
          <script src="/dist/js/adminlte.min.js"></script>
          <script src="{{ asset('js/app.js') }}"></script>


    

    <main class="py-4">
        
    </main>
</div>
</body>
</html>
















{{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                       <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Hi There <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> --}}