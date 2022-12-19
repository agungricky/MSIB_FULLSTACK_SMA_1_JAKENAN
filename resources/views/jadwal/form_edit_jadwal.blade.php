@php
$arr_hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];

use App\Models\Guru;
use App\Models\Kelas;
$guru = Guru::all();
$kelas = Kelas::all();

@endphp

@extends('admin.index')
@section('content')
@if (Auth::user()->role =='administrator')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <br><br><br><br>
                    <img src="{{url('admin\images\carousel\jadwal.png')}}" alt="" style="border:0; width: 100%; height: 384px;" allowfullscreen>
                </div>

                <div class="col-md-6">
                    <div class="alert alert-warning fs-4 fw-bold mb-5" role="alert">
                        #Table Edit Jadwal
                    </div>
                      
                @foreach ($data as $data)
                
                <form action="{{route('jadwal.update', $data->id)}}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row"> 
                        <div class="col form-group">
                            <select class="form-control form-control-lg countrylist" name="Hari">
                                <option selected>----- Hari -----</option>
                                    @foreach($arr_hari as $h)
                                    @php
                                        $hari = ($h == $data->Hari) ? 'selected' : '';
                                    @endphp
                                        <option value="{{$h}}" {{ $hari }}>{{ $h }}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="col form-group">
                            <input type="text" class="form-control" name="Jam" id="" placeholder="Jam" value="{{ $data->Jam }}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input name="Mapel" type="text" class="form-control" id="" placeholder="Mapel"
                        value="{{ $data->Mapel }}" required>
                    </div>
                    <div class="row two-div">
                        <div class="form-group two-div">
                            <label for=""> Nama Guru : &nbsp </label>
                            <select class="form-select" name="guru" required>
                                <option selected>-- Nama Guru --</option>
                                @foreach($guru as $g)
                                @php
                                    $s1 = ($g->id == $data->guru_id) ? 'selected' : '';
                                @endphp
                                    <option value="{{$g->id}}" {{ $s1 }}>{{ $g->nama }}</option>
                                @endforeach
                            </select>
                        </div>
    
                        <div class="form-group two-div">
                            <label for=""> Kelas : &nbsp </label>
                            <select class="form-select" name="kelas" required>
                                <option selected>-- Kelas --</option>
                                @foreach($kelas as $k)
                                @php
                                    $s2 = ($k->id == $data->kelas_id) ? 'selected' : '';
                                @endphp
                                    <option value="{{$k->id}}" {{ $s2 }}>{{ $k->kelas }}</option>
                                @endforeach
                                {{-- <option value="8">Coba</option> --}}
                            </select>
                        </div>
                    </div>
                    

                    <div class="my-3">
                        <div class="">Data ini akan kami simpan di <span class="text-danger">DATABASE</span></div>
                        <div class="sent-message">Jika data sudah benar klik tombol simpan di bawah!!!</div>
                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-primary">Simpan data</button></div>
                </form>
                @endforeach
                
                </div>
            </div>
        </div>

    </div>
</div>
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
@else
@include('layouts.accessdenied')
@endif
@endsection