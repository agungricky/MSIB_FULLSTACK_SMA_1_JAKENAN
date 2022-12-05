    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="{{url('landingpage.home')}}"><img src="{{url('assets/img/logosma.png')}}" alt="Logo" class="logo">SMA 1 JAKENAN<span>.</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        {{-- <a href="index.html" class="logo"><img src="{{url('assets/img/logosma.png')}}" alt=""></a> --}}

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="{{url('/home')}}">Home</a></li>
            <li><a class="nav-link scrollto" href="{{url('/about')}}">About</a></li>
            <li><a class="nav-link scrollto " href="{{url('/portofolio')}}">Portfolio</a></li>
            <li class="dropdown"><a href="#"><span>Jurusan</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Drop Down 2</a></li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="{{url('/contact')}}">Contact</a></li>
            <li><a class="nav-link scrollto" href="{{url('/login')}}">Login</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div>
    </header><!-- End Header -->
