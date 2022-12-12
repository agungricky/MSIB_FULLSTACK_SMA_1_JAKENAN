@php
$arr_hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
@endphp

@extends('admin.index')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <br><br><br><br>
                    <img src="admin\images\carousel\guru.png" alt="" style="border:0; width: 100%; height: 384px;" allowfullscreen>
                </div>

                <div class="col-md-6">
                    <div class="alert alert-warning fs-4 fw-bold" role="alert">
                        #Table Edit Jadwal
                      </div>
                      
                    <form action="{{route('jadwal.store')}}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                        @csrf

                        @foreach ($data as $data)

                        <div class="row"> 
                            <div class="col form-group">
                                <select class="form-control form-control-lg countrylist" name="hari">
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
                            <input name="mapel" type="text" class="form-control" id="" placeholder="Mapel"
                            value="{{ $data->Mapel }}" required>
                        </div>
                        <div class="row">
                            <div class="col-8 form-group">
                                <input type="text" name="guru" class="form-control" id="" placeholder="{{ $data->guru}}" value="{{ $data->id}}" required>
                            </div>

                            <div class="col form-group">
                                <input name="kelas" type="text" class="form-control" id="" placeholder="{{ $data->kelas }}" value="{{ $data->id}}" required>
                            </div>
                        </div>
                        @endforeach

                        

                        <div class="my-3">
                            <div class="">Data ini akan kami simpan di <span class="text-danger">DATABASE</span></div>
                            <div class="sent-message">Jika data sudah benar klik tombol simpan di bawah!!!</div>
                        </div>
                        <div class="text-center"><button type="submit" class="btn btn-primary">Simpan data</button></div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
@endsection