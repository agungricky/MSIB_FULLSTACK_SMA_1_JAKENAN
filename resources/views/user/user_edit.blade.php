@extends('admin.index')
@section('content')
@if (Auth::user()->role =='administrator')

@php
$arr_hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
@endphp

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row purchace-popup">
            <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary">
                    <span class="card-body d-lg-flex align-items-center">
                        <p class="mb-lg-0">Semangat dan Tekunlah Menimba Ilmu demi Masedepanmu yang Cemerlang</p>
                    </span>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                {{-- <div class="col-md-6">
                    <img src="admin/images/guru/guru.png" alt="" style="border:0; width: 100%; height: 384px;" allowfullscreen>
                </div> --}}

                <div class="col">
                    @foreach ($data as $row)
                    <form action="{{route('user.update', $row->id)}}" method="post">
                        @csrf
                        @method('put')
                        {{-- Upload img : https://www.w3schools.com/php/php_file_upload.asp --}}

                        <div class="row two-div">
                            <div class="form-group two-div">
                                <label for="" class=" col-form-label"> Nama : &nbsp </label>
                                <input name="name" type="text" placeholder="Nama Lengkap" class="form-control" value="{{$row->name}}" required>
                            </div>

                            <div class="form-group two-div">
                                <label for="" class=" col-form-label"> Email : &nbsp </label>
                                <input name="email" type="email" placeholder="Email" class="form-control" value="{{$row->email}}" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="" class=" col-form-label"> Password : &nbsp </label>
                                <input type="text" name="password" class="form-control" value="{{$row->password}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label for="" class=" col-form-label"> Role : &nbsp </label>
                                <select class="form-select" name="role">
                                    <option selected>-- Pilih Role --</option>
                                    @foreach($role as $rl)
                                    @php
                                    $selRole = ($rl == $row->role) ? 'selected' : '';
                                    @endphp
                                    <option value="{{ $rl }}" {{ $selRole }}>{{ $rl }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                </div>

                <div class="">            
                    <button type="submit" class="form-control submit-btn" title="Simpan User"><i class="bi bi-save"></i> Simpan</button>
                </div>
                @endforeach
                </form>
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