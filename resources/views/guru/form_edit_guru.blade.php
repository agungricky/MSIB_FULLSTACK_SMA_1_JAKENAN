@extends('admin.index')
@section('content')
@if (Auth::user()->role =='administrator')
@php
$ar_gender = ['L','P'];
$ar_agama = ['Islam','Hindu','Budha','Kristen','Lainya'];
@endphp
<div class="main-panel">
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{url('admin/images/form/edit.png') }}" alt="" style="border:0; width: 100%; height: 384px;" allowfullscreen>
                </div>

                <div class="col-md-6">
                    @foreach ($data as $rs)
                    <form action="{{route('guru.update', $rs->id)}}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                        @csrf
                        {{-- ========== Ricky Update : Yang di Rubah method put =============== --}}
                        @method('put')
                        <div class="row">
                            <div class="col form-group">
                                <input type="text" name="nip" class="form-control" value="{{ $rs->nip }}" required>
                            </div>
                            <div class="col form-group">
                                <input type="text" class="form-control" name="nama" value="{{ $rs->nama }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="alamat" id="" value="{{ $rs->alamat }}" required>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <input type="date" name="tgl_lahir" class="form-control" id="" value="{{ $rs->tgl_lahir }}" required>
                            </div>
                            <div class="form-group">
                                <select class="form-control form-control-lg countrylist" name="gender">
                                    <option selected>----- jenis_kelamin -----</option>
                                    @foreach($ar_gender as $gender)
                                    {{-- Ricky edit --}}
                                    @php
                                    $sel1 = ($gender == $rs->gender) ? 'selected' : '';
                                    @endphp
                                    <option value="{{$gender}}" {{ $sel1 }}>{{ $gender }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <input type="text" name="tempat_lahir" class="form-control" id="" value="{{ $rs->tempat_lahir }}" required>
                            </div>
                            <div class="col form-group">
                                <input type="text" class="form-control" name="no_telp" value="{{ $rs->no_telp }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <input type="text" name="email" class="form-control" id="" value="{{ $rs->email }}" required>
                            </div>
                            <div class="form-group">
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
                        </div>
                        {{-- {{-- <div class="row">
                            <div class="col-4 form-group">
                                <img src="{{asset('admin/images/guru') }}/{{ $rs->foto }}" width="100%" />
                </div>
                <div class="col form-group">
                    <input type="text" name="foto" class="form-control" id="" value="{{ $rs->foto }}">
                </div>
            </div> --}}

            <div class="row">
                <input type="hidden" name="oldImage" value="{{$rs->foto}}">
                @if($rs->foto)
                <img src="{{asset('admin/images/guru/'.$rs->foto)}}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
{{-- <script>
    function previewImage(){
        const image = document.querySelector('#image')
        const imgPreview = document.querySelector('.img-preview')

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
</script> --}}

@else
@include('layouts.accessdenied')
@endif
@endsection