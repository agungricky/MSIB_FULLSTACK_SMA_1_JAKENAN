@extends('admin.index')
@section('content')
@php
$arr_hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
@endphp
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ url('admin\images\carousel\spp.png') }}" alt="" style="border:0; width: 100%; height: 384px;" allowfullscreen>
            </div>

            <div class="col-md-6">
                <div class="row form-panel">
                    <div class="col-md-12 wrapper">
                        <div class="alert alert-warning fs-4 fw-bold mb-4" role="alert">
                            #Form Edit Tugas
                        </div>

                            @foreach ($data as $row)
                            <form action="{{route('tugas.update', $row->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                
                                <div class="form-group">
                                    <label for=""> Perihal : &nbsp </label>
                                    <input name="perihal" type="text" placeholder="Tugas" class="form-control" value="{{$row->perihal}}"> 
                                </div>
        
                                <div class="form-group">
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
        
                                <div class="form-group">
                                    <label for=""> Keterangan : &nbsp </label>
                                    <input name="keterangan" type="text" placeholder="Tugas" class="form-control" value="{{$row->keterangan}}"> 
                                    @if($row->upload)
                                    <img src="{{asset('admin/images/tugas/'.$row->upload)}}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                    @else
                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                    @endif
                                    
                                </div>

                                
        
                                <div class="form-group">
                                    <input type="file" class="form-control" name="upload" id="image" placeholder="Upload" onchange="previewImage()">                              
                                </div> 
        
                                <div>
                                    <input type="submit" name="inputMapel" class="form-control submit-btn">
                                </div>   
                                @endforeach
                            </form>
                            {{-- <form method="POST" action="{{ route('tugas.hapusFile', $row->upload) }}">
                                <button type="submit" class="btn btn-danger btn-sm" title="Hapus Pegawai"
                                                    onclick="return confirm('Anda Yakin Data akan diHapus?')">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
@endsection