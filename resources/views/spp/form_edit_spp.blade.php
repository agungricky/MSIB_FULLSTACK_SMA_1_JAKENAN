@extends('admin.index')
@section('content')
@php
    use App\Models\Spp;
    $siswa = Spp::all();
@endphp
@if (Auth::user()->role =='administrator')

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
                            #Form Edit SPP Siswa
                        </div>
                        @foreach ($data as $row)
                        <form action="{{route('spp.update', $row->id)}}" method="post" name="mapelForm" >
                            @csrf
                            @method('put')
                            
                            <div class="row two-div">
                            <div class="form-group two-div">
                                    <label for=""> Tanggal : &nbsp </label>
                                    <input name="tanggal" type="date" placeholder="Tanggal" class="form-control" value="{{$row->tanggal}}">
                                </div>
        
                                <div class="form-group two-div">
                                    <label for=""> Total : &nbsp </label>
                                    <input name="total" type="text" placeholder="Total" class="form-control" value="{{$row->total}}"> 
                                </div>
                            </div>
        
                            <div class="row two-div">
                                <div class="form-group two-div">
                                    <label for=""> Kurang : &nbsp </label>
                                    <input name="kurang" type="text" placeholder="Kurang" class="form-control" value="{{$row->kurang}}"> 
                                </div>
        
                                <div class="form-group two-div">
                                    <label for=""> Siswa : &nbsp </label>
                                    <select class="form-select" name="siswa" required>
                                        <option selected>-- Nama Siswa --</option>
                                        @foreach($siswa as $s)
                                        @php
                                            $s1 = ($s->id == $row->siswa_id) ? 'selected' : '';
                                        @endphp
                                            <option value="{{$s->id}}" {{ $s1 }}>{{ $s->nama_siswa }}</option>
                                        @endforeach
                                    </select>
                                </div>    
                            </div>
        
                            <div>
                                <input type="submit" name="inputSpp" class="form-control submit-btn">
                            </div>
                        </form>
                     @endforeach
                    </div>
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