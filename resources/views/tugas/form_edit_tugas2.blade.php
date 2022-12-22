@extends('admin.index')
@section('content')

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
                    <form action="{{route('tugas.update', $row->id)}}" method="post" >
                        @csrf
                        @method('put')
                        {{-- Upload img : https://www.w3schools.com/php/php_file_upload.asp --}}
                        
                        <div class="form-group">
                            <label for=""> Perihal : &nbsp </label>
                            <input name="perihal" type="text" placeholder="Tugas" class="form-control" value="{{$row->perihal}}"> 
                        </div>

                        <div class="form-group two-div">
                            <label for=""> Hari : &nbsp</label>
                            <select name="hari" id="hari" class="form-select form-control">
                                @foreach ($arr_hari as $hari)
                                    @php
                                        $sel1 = ($hari == $row->hari) ? 'selected' : '';
                                    @endphp
                                        <option value="{{$hari}}" {{ $sel1 }}>{{ $hari }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="row two-div">
                            <div class="form-group two-div">
                                <label for=""> Tanggal : &nbsp </label>
                                <input name="tanggal" type="date" placeholder="Tanggal" class="form-control" value={{$row->tanggal}}>
                            </div>

                            <div class="form-group two-div">
                                <label for=""> Jam &nbsp</label> 
                                    <input name="jam" type="text"class="form-control" value="{{$row->jam}}">
                            </div>
                        </div>

                        <div class="form-group two-div">
                            <label for=""> Keterangan : &nbsp </label>
                            <input name="keterangan" type="text" placeholder="Tugas" class="form-control" value="{{$row->keterangan}}"> 
                        </div>
                            
                            {{-- <label for=""> Selesai &nbsp </label>
                                <input type="time" class="form-control"> --}} 

                        <div class="form-group">
                            <input type="hidden" name="oldImage" value="{{$rs->foto}}">
                            @if($rs->foto)
                            <img src="{{asset('admin/images/tugas/'.$rs->foto)}}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                            @else
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="file" class="form-control" name="tugas" id="image" placeholder="Upload" onchange="previewImage()">                              
                        </div> 

                        <div>
                            <input type="submit" name="inputMapel" class="form-control submit-btn">
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
@endsection+