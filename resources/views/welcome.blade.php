<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cyberlark Solutions</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
  <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
  {{-- <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet"> --}}

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>



  <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top fixed-top" style="    background-color: #d11a1a;">
   
    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="{{url('/')}}" style="background-color:">Home</a></li>
        <li><a href="{{url('/about')}}">About</a></li>
        <li><a href="{{url('/product')}}">Products</a></li>

        <li><a href="{{url('/team')}}" class="mx-3">Team</a></li>
        <li><a href="{{url('/whyus')}}" class="mx-3">Why Us</a></li>
       
          <li><a href="{{url('/contect')}}">Contact</a></li>
       
    </nav>




    <ul class="navbar-nav ml-auto">


      <li class="nav-item">
        <a class="nav-link" href="{{url('/viewCart')}}" style="font-size: 10px  font-weight:5 ;
        ">Show Cart

            <div class="badge bg-black text-white" >{{ \Illuminate\Support\Facades\Session::has('Cart') ? \Illuminate\Support\Facades\Session::get('Cart')->totalQty : '' }}</div>
        </a>
    </li>


      @if(Route::has('admin.login'))
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.login') }}">
          <span class="text-white small"><div>Admin</div></span>
        </a>
      </li>
      @endif
  
  
  
      @if (Route::has('login'))
      @auth('front')
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">
          <span class="text-white small"><div>Dashboard</div></span>
        </a>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">Log in</a>
      </li>
      @if (Route::has('register'))
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">
          <span class="text-white small"><div>Register</div></span>
        </a>
      </li>
      @endif
      @endauth
      @endif

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
     
      <div class="topbar-divider d-none d-sm-block"></div>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
          @if(Auth::guard('front')->check() && Auth::guard('front')->user()->name)
          <span class="ml-2 d-none d-lg-inline text-white small"><div>{{ Auth::guard('front')->user()->name }}</div></span>
          @else

          <span class="ml-2 d-none d-lg-inline text-white small"><div>no user</div></span>
          @endif
        </a>
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          {{-- <a class="dropdown-item" href="#">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profile
          </a>
          <a class="dropdown-item" href="#">
            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
            Settings
          </a>
          <a class="dropdown-item" href="#">
            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
            Activity Log
          </a> --}}
          {{-- <div class="dropdown-divider"></div> --}}
          <a class="dropdown-item" href="login.html" style="padding: 0px 30px">
            {{-- <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout --}}


            <form method="POST" action="{{ route('logout') }}">
              @csrf
  
              
  
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
              this.closest('form').submit();"
           class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</a>
  
          </form>

          </a>


        </div>
      </li>
    </ul>
  </nav>
 
  <!-- Topbar -->

  @yield('home')
  
  @yield('cart')

  <main id="main">

    @yield('products')
    @yield('team')
    @yield('about')
    @yield('whyus')
    @yield('contect')



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              AIR SPACE SATION <br>
              @AIR.SPACESTATION.PK<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +92 3086690935<br>
              <strong>Email:</strong> cyberlarksolutions@gmail.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: 11AM</strong> - 23PM<br>
              Sunday: Closed
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="https://x.com/BloodyHacker10?t=-DTpUhw4uatNLOr78aW_7A&s=09" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/itzEman0?mibextid=ZbWKwL" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://instagram.com/bloodyhacker10?igshid=OGQ5ZDc2ODk2ZA==" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/in/bloody-eyed-69951827b/" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; cyberlarksolutions 2023-2025<strong><span>Hackers</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>



  {{-- header cjs --}}

  
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>  

</body>

</html>