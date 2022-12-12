@extends('admin.index')
@section('content')
@if (Auth::user()->role =='administrator')

@php
$arr_hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
@endphp

<div class="main-panel">

    <div class="content-wrapper">

        <div class="row purchace-popup">
            <div class="col-12 stretch-card grid-margin headForm">
                <div class="card card-secondary ">
                    <span class="card-body d-lg-flex align-items-center motivasi cardCenter">
                        <h1 class="mb-lg-0">Form Jadwal</h1>
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
                <form action="{{route('jadwal.store')}}" method="post" name="mapelForm">
                    @csrf
                    @method('post')
                    {{-- Upload img : https://www.w3schools.com/php/php_file_upload.asp --}}
                    <div class="row">
                        <div class="form-group">
                            <label for=""> Mata Pelajaran : &nbsp </label>
                            <input name="mapel" type="text" placeholder="Mata Pelajaran" class="form-control">
                        </div>
                    </div>

                    <div class="row two-div">
                        <div class="form-group two-div">
                            <label for=""> Kode Guru : &nbsp </label>
                            <input name="guru" type="text" placeholder="Kode Guru" class="form-control">
                        </div>

                        <div class="form-group two-div">
                            <label for=""> Kelas : &nbsp </label>
                            <input name="kodeKelas" type="text" placeholder="Kode Kelas" class="form-control">
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
                                @foreach($arr_hari as $hari)
                                <option value="{{ $hari }}">{{ $hari }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group two-div">
                            <label for=""> Jam &nbsp</label>
                            <input name="jam" type="time" class="form-control">
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
                </form>
            </div>
        </div>

    </div>
</div>
</div>
</div>
</div>
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
    </div>
</footer>
<!-- partial -->
</div>
</div>
</div>
@else
@include('layouts.accessdenied')
@endif
@endsection