@extends('admin.index')
@section('content')
<div class="main-panel">
  <div class="content-wrapper bg">
    <body>
      <div class="jam-digital">
        <h1>Jam Digital</h1>
        <div id="jam"></div>
        <div id="unit">
          <span>Jam</span>
          <span>Menit</span>
          <span>Detik</span>
        </div>
     </div>
    </body>

  </div>

  <style>
    .bg {
    background-image: url('admin/images/auth/daun.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    }
  </style>

</div>
</div>
</div>
@endsection