


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="{{ asset('img/logo/logo.png') }}" rel="icon">
    <title>RuangAdmin - Dashboard</title>
    <link href=  "{{ asset('vendor/fontawesome-free/css/all.min.css') }}"   rel="stylesheet" type="text/css">
    <link href=  "{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}"  rel="stylesheet" type="text/css">
    <link href=  "{{ asset('css/ruang-admin.min.css') }}"  rel="stylesheet">

</head>

<body id="page-top">
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html"   >
            <div class="sidebar-brand-icon">
                <img src= "{{ asset('img/logo/logo2.png') }}">
            </div>
            <div class="sidebar-brand-text mx-3">RuangAdmin</div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
            <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
      


        <li class="nav-item" >
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
              aria-expanded="true" aria-controls="collapseBootstrap">
              <i class="far fa-fw fa-window-maximize"></i>
              <span>Products</span>
            </a>
            <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Products</h6>
                <a class="collapse-item" href="{{url('/admin/createproducts')}}">Creat</a>
                <a class="collapse-item" href="{{url('/admin/viewproducts')}}">view</a>
              
              </div>
            </div>
          </li>



          <li class="nav-item" >
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
              aria-expanded="true" aria-controls="collapseBootstrap">
              <i class="far fa-fw fa-window-maximize"></i>
              <span>Courses</span>
            </a>
            <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Courses</h6>
                <a class="collapse-item" href="{{url('/admin/createcourses')}}">Creat</a>
                <a class="collapse-item" href="{{url('/admin/viewcourses')}}">view</a>
              
              </div>
            </div>
          </li>

          <li class="nav-item" >
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
              aria-expanded="true" aria-controls="collapseBootstrap">
              <i class="far fa-fw fa-window-maximize"></i>
              <span>Hire Us</span>
            </a>
            <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Hire Us</h6>
                <a class="collapse-item" href="{{url('/admin/createhireus')}}">Creat</a>
                <a class="collapse-item" href="{{url('/admin/viewhireus')}}">view</a>
              
              </div>
            </div>
          </li>

        



         
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
              aria-controls="collapseTable">
              <i class="fas fa-fw fa-table"></i>
              <span>Users</span>
            </a>
            <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Users</h6>
                <a class="collapse-item" href="{{url('/admin/createusers')}}">Creat</a>
                <a class="collapse-item" href="{{url('/admin/viewusers')}}">view</a>
              
              </div>
            </div>
          </li>
        




       



    </ul>




    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <!-- TopBar -->
            <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
                                           aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <span class="badge badge-warning badge-counter">2</span>
                        </a>
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Message Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src= "{{ asset('img/man.png') }}" style="max-width: 60px" alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been
                                        having.</div>
                                    <div class="small text-gray-500">Udin Cilok · 58m</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="{{ asset('img/girl.png') }}"   style="max-width: 60px" alt="">
                                    <div class="status-indicator bg-default"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people
                                        say this to all dogs, even if they aren't good...</div>
                                    <div class="small text-gray-500">Jaenab · 2w</div>
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-tasks fa-fw"></i>
                            <span class="badge badge-success badge-counter">3</span>
                        </a>
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Task
                            </h6>
                            <a class="dropdown-item align-items-center" href="#">
                                <div class="mb-3">
                                    <div class="small text-gray-500">Design Button
                                        <div class="small float-right"><b>50%</b></div>
                                    </div>
                                    <div class="progress" style="height: 12px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item align-items-center" href="#">
                                <div class="mb-3">
                                    <div class="small text-gray-500">Make Beautiful Transitions
                                        <div class="small float-right"><b>30%</b></div>
                                    </div>
                                    <div class="progress" style="height: 12px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item align-items-center" href="#">
                                <div class="mb-3">
                                    <div class="small text-gray-500">Create Pie Chart
                                        <div class="small float-right"><b>75%</b></div>
                                    </div>
                                    <div class="progress" style="height: 12px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">View All Taks</a>
                        </div>
                    </li>
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <img class="img-profile rounded-circle" src="{{ asset('img/boy.png') }}" style="max-width: 60px">
                            <span class="ml-2 d-none d-lg-inline text-white small">{{auth()->user()->name}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                            


                            <a href="{{ route('admin.profile') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a>
            
                            <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf
                                <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                                                            this.closest('form').submit();"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</a>
                            </form>
                      


                          </div>
                    </li>
                </ul>
            </nav>



    <!-- Topbar -->


            <!-- Container Fluid-->
            <div class="container-fluid" id="container-wrapper">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div>
            </div>

            @yield('content')

            <!-- Scroll to top -->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>




        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('js/ruang-admin.min.js') }}"></script>
        <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
        <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>





</body>

</html>
