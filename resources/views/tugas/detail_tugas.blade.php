@extends('admin.index')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
            {{-- <div class="card d-flex" style="background-color: white; height:100%;"> --}}
                <div class="card-body tugas-card pt-4 d-flex flex-column align-items-center" style="">
                <!-- // ============================= Fergi : Detail Tugas ========================= -->
                    {{-- <h2>{{ $row->keterangan }}</h2> --}}
                    <h3>{{ $row->perihal }}</h3>
                    @php
                        if(!empty($row->upload)){
                    @endphp
                        
                        <iframe src="{{asset('admin/images/tugas') }}/{{ $row->upload }}" class="image-task" width="80%" height="320"></iframe>
                        
                    @php
                        }else{
                    @endphp
                        <img src="{{ url('admin/images/nophoto.png') }}" alt="Profile" class="rounded-circle">
                    @php
                        }
                    @endphp
                    
                    <!-- <div class=" alert alert-primary" role="alert"></div> -->
                        <br /> Tanggal Pengumpulan : {{ $row->tanggal }}
                        <br />Jam: {{ $row->jam }}     
                        <br />Keterangan Tugas: {{ $row->keterangan }}
                        {{-- @if(!empty($row->upload))
                            <br />Foto: <img src="{{ asset('admin/images/tugas') }}/{{ $row->upload }}" width="100" height="100">
                        @endif --}}
                    
                </div>
            {{-- </div> --}}
        </div>
{{-- </section> --}}
</div>
@endsection