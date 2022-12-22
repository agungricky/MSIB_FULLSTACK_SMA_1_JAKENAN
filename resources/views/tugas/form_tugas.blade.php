

@extends('admin.index')
@section('content')

@php
$arr_hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
$arr_perihal = ['Quiz', 'Tugas Harian', 'UTS', 'UAS', 'Praktikum', 'Lainnya'];
@endphp

<div class="main-panel">
    <div class="content-wrapper">
        {{-- <div class="row purchace-popup">
            <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary">
                    <span class="card-body d-lg-flex align-items-center">
                        <p class="mb-lg-0">Get tons of UI components, Plugins, multiple layouts, 20+ sample pages, and more! </p>
                    </span>
                </div>
            </div>
        </div> --}}

        <!-- // ============================= Fergi : Membuat Form Input Tugas ========================= -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ url('admin\images\carousel\spp.png') }}" alt="" style="border:0; width: 100%; height: 384px;" allowfullscreen>
                </div>

                <div class="col-md-6">
                    <div class="alert alert-warning fs-4 fw-bold mb-4" role="alert">
                        #Form Tugas
                    </div>
                    <form action="{{route('tugas.store')}}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                        @csrf 

                        <div class="form-group">
                            <label for=""> Perihal : &nbsp </label>
                                <select name="perihal" id=""  class="form-select form-control">
                                    <option selected>----- Perihal -----</option>
                                    @foreach ($arr_perihal as $hal)
                                        <option value="{{$hal}}"> {{$hal}}</option>
                                    @endforeach
                                </select>


                        </div>

                        <div class="form-group">
                            <label for=""> Hari : &nbsp</label>
                            <select name="hari" id="hari" class="form-select form-control">
                                @foreach ($arr_hari as $hari)
                                    {{-- @php
                                        $sel1 = ($hari == $row->hari) ? 'selected' : '';
                                    @endphp --}}
                                        <option value="{{$hari}}">{{ $hari }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="row two-div">
                            <div class="form-group two-div">
                                <label for=""> Tanggal : &nbsp </label>
                                <input name="tanggal" type="date" placeholder="Tanggal" class="form-control" >
                            </div>

                            <div class="form-group two-div">
                                <label for=""> Jam &nbsp</label>
                                
                                    <input name="jam" type="text"class="form-control">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for=""> Keterangan : &nbsp </label>
                            <input name="keterangan" type="text" placeholder="Tugas" class="form-control" > 
                        </div>
                        
                        <div class="form-group">
                            <input type="file" class="form-control" name="upload" id="" placeholder="Upload">                              
                        </div> 

                        {{-- <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div> --}}
                        <div class="text-center"><button type="submit" class="form-control submit-btn">Simpan</button></div>
                    </form>
                </div>
                
            </div>
        </div>

    </div>
</div>
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
@endsection