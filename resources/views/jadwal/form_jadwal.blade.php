@extends('admin.index')
@section('content')

@php
$arr_hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];

use App\Models\Guru;
use App\Models\Kelas;
$guru = Guru::all();
$kelas = Kelas::all();
@endphp
@if (Auth::user()->role =='administrator')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6">
                <br><br>
                <img src="{{url('admin\images\carousel\jadwal.png')}}" alt="" style="border:0; width: 100%; height: 384px;" allowfullscreen>
            </div>

            <div class="col-md-6">
                <div class="row form-panel">
                        <form action="{{route('jadwal.store')}}" method="post" name="mapelForm" >
                            @csrf
                            @method('post')
                            <div class="row">
                                <div class="alert alert-warning fs-4 fw-bold" role="alert">
                                    #Form Jadwal
                                </div>

                                <div class="row two-div">        
                                    <div class="form-group two-div">
                                         <label for=""> Hari : &nbsp</label>
                                         <select name="Hari" id="Hari" class="form-select form-control">
                                             <option selected >Hari</option>
                                             @foreach($arr_hari as $hari)
                                                 <option value="{{ $hari }}">{{ $hari }}</option>
                                             @endforeach
                                         </select>
                                     </div>
                                     
                                     <div class="form-group two-div">
                                         <label for=""> Jam &nbsp</label> 
                                             <input name="Jam" type="text"class="form-control">
                                     </div>
                                 </div> 

                                <div class="form-group">
                                    <label for=""> Mata Pelajaran : &nbsp </label>
                                    <input name="Mapel" type="text" placeholder="Mata Pelajaran" class="form-control"> 
                                </div>
                            </div>
                            
                            <div class="row two-div">
                                <div class="form-group two-div">
                                    <label for=""> Nama Guru : &nbsp </label>
                                    <select class="form-select" name="guru" required>
                                        <option selected>-- Nama Guru --</option>
                                        @foreach($guru as $g)
                                        <option value="{{ $g->id }}">{{ $g->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
            
                                <div class="form-group two-div">
                                    <label for=""> Kelas : &nbsp </label>
                                    <select class="form-select" name="kelas" required>
                                        <option selected>-- Kelas --</option>
                                        @foreach($kelas as $k)
                                        <option value="{{ $k->id }}">{{ $k->kelas }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="my-3">
                                <label>Data ini akan kami simpan di <span class="text-danger">DATABASE</span></label>
                                <label>Jika data sudah benar klik tombol simpan di bawah!!!</label>
                            </div>
        
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
</div>
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->

<!-- partial -->
</div>
</div>
</div>
@else
@include('layouts.accessdenied')
@endif
@endsection