@extends('admin.index')
@section('content')
@php
    use App\Models\Siswa;
    $siswa = Siswa::all();
@endphp

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row purchace-popup" >
            <div class="col-12 stretch-card grid-margin headForm">
                <div class="card card-secondary ">
                    <span class="card-body d-lg-flex align-items-center motivasi cardCenter">
                        <h1 class="mb-lg-0">Form SPP</h1>
                        {{-- <button class="close popup-dismiss ml-2">
                            <span aria-hidden="true">&times;</span>
                        </button> --}}
                    </span>
                </div>
            </div>
        </div>

        {{-- Form --}}
        <div class="row form-panel">
            <div class="col-md-12 wrapper">
                @foreach ($data as $row)
                <form action="{{route('spp.update', $row->id)}}" method="post" name="mapelForm" >
                    @csrf
                    @method('put')
                    
                    <div class="row two-div">
                    <div class="form-group two-div">
                            <label for=""> Tanggal : &nbsp </label>
                            <input name="tanggal" type="date" placeholder="Tanggal" class="form-control" value="{{$row->tanggal}}">
                        </div>

                        <div class="form-group two-div">
                            <label for=""> Total : &nbsp </label>
                            <input name="total" type="text" placeholder="Total" class="form-control" value="{{$row->total}}"> 
                        </div>
                    </div>

                    <div class="row two-div">
                        <div class="form-group two-div">
                            <label for=""> Kurang : &nbsp </label>
                            <input name="kurang" type="text" placeholder="Kurang" class="form-control" value="{{$row->kurang}}"> 
                        </div>

                        <div class="form-group two-div">
                            <label for=""> Siswa : &nbsp </label>
                            <select class="form-select" name="siswa" required>
                                <option selected>-- Nama Siswa --</option>
                                @foreach($siswa as $s)
                                @php
                                    $s1 = ($s->id == $row->siswa_id) ? 'selected' : '';
                                @endphp
                                    <option value="{{$s->id}}" {{ $s1 }}>{{ $s->nama_siswa }}</option>
                                @endforeach
                            </select>
                        </div>    
                    </div>

                    <div>
                        <input type="submit" name="inputSpp" class="form-control submit-btn">
                    </div>
                </form>
             @endforeach
            </div>
        </div>
    </div>
</div>


<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
{{-- <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
    </div>
</footer> --}}
<!-- partial -->
@endsection