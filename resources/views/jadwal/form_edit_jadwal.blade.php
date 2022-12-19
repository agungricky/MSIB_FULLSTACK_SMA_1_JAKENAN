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

                        <div class="row two-div">
                            <div class="form-group two-div">
                                <label for=""> Mata Pelajaran : &nbsp </label>
                                <input name="mapel" type="text" placeholder="Mata Pelajaran" class="form-control" value="{{$row->Mapel}}">
                            </div>

                            <div class="form-group two-div">
                                <label for=""> Kelas : &nbsp </label>
                                <input name="kodeKelas" type="text" placeholder="Kode Kelas" class="form-control" value="{{$row->kelas_id}}">
                            </div>
                        </div>

                        {{-- <div class="row two-div">
                            <div class="form-group two-div">
                                <label for=""> Tugas : &nbsp </label>
                                <input name="tugas" type="text" placeholder="Tugas" class="form-control"> 
                            </div>
                            
                            <div class="form-group two-div">
                                <label for=""> Tanggal : &nbsp </label>
                                <input name="tanggal" type="date" placeholder="Tanggal" class="form-control">
                            </div>
                        </div> --}}

                        <div class="row two-div">

                            <div class="form-group two-div">
                                <label for=""> Hari : &nbsp</label>
                                <select name="hari" id="hari" class="form-select form-control">
                                    <option selected>Hari</option>
                                    @foreach ($arr_hari as $hari)
                                    @php
                                    $sel1 = ($hari == $row->Hari) ? 'selected' : '';
                                    @endphp
                                    <option value="{{$hari}}" {{ $sel1 }}>{{ $hari }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group two-div">
                                <label for=""> Jam &nbsp</label>
                                <input name="jam" type="time" class="form-control" value="{{$row->Jam}}">
                            </div>
                            {{-- <label for=""> Selesai &nbsp </label>
                                <input type="time" class="form-control"> --}}
                        </div>

                        {{-- <div class="form-group">
                            <label for=""> Perihal : &nbsp </label>
                            <textarea name="perihal" id="perihal" cols="30" rows="10" class="form-control perihal" placeholder="Perihal"></textarea>
                        </div> --}}

                        <div>
                            <input type="submit" name="inputMapel" class="form-control submit-btn">
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