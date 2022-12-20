<div class="container-fluid page-body-wrapper">
  <!-- menu -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      {{-- Menu dasboar --}}
      <li class="nav-item nav-category">
        <span class="nav-link">Dashboard</span>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/dashboard')}}">
          <span class="menu-title">Data Grafik</span>
          <i class="icon-screen-desktop menu-icon"></i>
        </a>
      </li>

      <li class="nav-item nav-category"><span class="nav-link">Data</span></li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('/laporan_akademik')}}">
          <span class="menu-title">Laporan Akademik</span>
          <i class="icon-globe menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-title">Tables</span>
          <i class="icon-layers menu-icon"></i>
        </a>
        <div class="collapse" id="tables">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('guru')}}">Guru & Staff</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('siswa')}}">Siswa</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('tugas')}}">Tugas</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('jadwal')}}">Jadwal</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('nilai')}}">Nilai</a></li>
            @if (Auth::user()->role=='siswa' )
            <li class="nav-item"> <a class="nav-link" href="{{url('spp')}}">SPP</a></li>
            @endif
            @if (Auth::user()->role=='administrator' )
            <li class="nav-item"> <a class="nav-link" href="{{url('user')}}">User</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('spp')}}">SPP</a></li>

            @endif



          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#forms" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-title">Form</span>
          <i class="icon-book-open menu-icon"></i>
        </a>
        <div class="collapse" id="forms">
          <ul class="nav flex-column sub-menu">
            @if (Auth::user()->role=='administrator' )
            <li class="nav-item"> <a class="nav-link" href="{{url('form_guru')}}">Guru & Staff</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('form_siswa')}}">Siswa</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('form_jadwal')}}">Jadwal</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('form_kelas')}}">Kelas</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('form_tugas')}}">Tugas</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('form_spp')}}">SPP</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('form_nilai')}}">nilai</a></li>
            @endif
            @if (Auth::user()->role=='guru' )
            <li class="nav-item"> <a class="nav-link" href="{{url('form_nilai')}}">nilai</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('form_tugas')}}">Tugas</a></li>
            @endif
          </ul>
        </div>
      </li>

      <li class="nav-item nav-category"><span class="nav-link">Information</span></li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('event')}}">
          <span class="menu-title">Event</span>
          <i class="icon-grid menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
          {{ __('Logout') }} <i class="icon-grid menu-icon"></i>

        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf </form>

      </li>

    </ul>
  </nav>