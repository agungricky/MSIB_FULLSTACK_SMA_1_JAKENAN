<div class="container-scroller">
    <!--navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex shadow" style="background-color: #3f1e41">
        <div class="profile-image mt-3">
          <img class="img-xs rounded-circle" src="{{url('admin/images/faces/face8.jpg')}}" alt="profile image">
          <div class="dot-indicator bg-success"></div>
        </div>
          {{-- <p class="profile-name mt-4 mx-2">User &nbsp; |</p> --}}
          <p class="designation mt-4 ms-2 fw-bold">@if (empty(Auth::user()->role))
            {{''}}
            @else
            {{Auth::user()->role}}
            @endif 
          </p>
          <p class="mt-4">|</p>
          <p class="designation mt-4">@if (empty(Auth::user()->name))
            {{''}}
            @else
            {{Auth::user()->name}}
            @endif
          </p>
      </div>
      
      <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
        <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome to dashboard!</h5>

        <ul class="navbar-nav navbar-nav-right ml-auto">
          <a href="{{url('/home')}}">
          <img src="{{ url('/admin/images/icon.png') }}" alt="">
          <span class="profile-text font-weight-bold">SMA Negeri 1 Jakenan</span>
        </a>
        </ul>
      </div>
    </nav>