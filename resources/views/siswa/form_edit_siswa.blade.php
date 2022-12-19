@extends('admin.index')
@section('content')
@if (Auth::user()->role =='administrator')

{{-- Novia --}}


<div class="main-panel">
    <div class="content-wrapper">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ url('admin/images/siswa/siswa.png') }}" alt="" style="border:0; width: 100%; height: 384px;" allowfullscreen>
                </div>

                <div class="col-md-6">
                    <div class="alert alert-warning fs-4 fw-bold" role="alert">
                        #Form Edit Siswa
                    </div>
                    {{-- Novia --}}
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    {{-- Ricky edit --}}
                    @foreach ($data as $rs)
                    <form action="{{route('siswa.update', $rs->id)}}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col form-group">
                                <input type="text" name="NIS" class="form-control" id="" value="{{ $rs->NIS }}" required>
                            </div>
                            <div class="col form-group">
                                <input type="text" class="form-control" name="nama_siswa" value="{{ $rs->nama_siswa }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="tempat_lahir" id="" value="{{ $rs->tempat_lahir }}" required>
                        </div>
                        <div class="row">
                            <div class="form-group col-4">
                                {{-- Ricky --}}
                                <select class="form-control form-control-lg countrylist" name="jenis_kelamin">
                                    <option selected>----- jenis_kelamin -----</option>
                                    @foreach($ar_gender as $gender)
                                    {{-- Ricky edit --}}
                                    @php
                                    $sel1 = ($gender == $rs->jenis_kelamin) ? 'selected' : '';
                                    @endphp
                                    <option value="{{$gender}}" {{ $sel1 }}>{{ $gender }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-8 form-group">
                                <input type="date" name="tgl_lahir" class="form-control" id="" value="{{ $rs->tgl_lahir }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-4">
                                <select class="form-control form-control-lg countrylist" name="agama">
                                    <option selected>----- Agama -----</option>
                                    @foreach($ar_agama as $agama)
                                    @php
                                    $sel2 = ($agama == $rs->agama) ? 'selected' : '';
                                    @endphp
                                    <option value="{{ $agama }}" {{ $sel2 }}>{{ $agama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col form-group col-8">
                                <input type="text" name="alamat" class="form-control" id="" value=" {{ $rs->alamat }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="form-control form-control-lg countrylist" name="status_siswa">
                                <option selected>----- Status Siswa -----</option>
                                @foreach($ar_status as $status)
                                @php
                                $sel3 = ($status == $rs->status_siswa) ? 'selected' : '';
                                @endphp
                                <option value="{{ $status }}" {{ $sel3 }}>{{ $status }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row">
                            <input type="hidden" name="oldImage" value="{{$rs->foto}}">
                            @if($rs->foto)
                            <img src="{{asset('admin/images/siswa/'.$rs->foto)}}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                            @else
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" name="foto" id="image" placeholder="Foto" onchange="previewImage()">
                        </div>

                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Simpan</button></div>
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