@extends('admin.index')
@section('content')
<section class="section profile">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                <!-- // ============================= Fergi : Detail Tugas ========================= -->
                    <h2>{{ $row->keterangan }}</h2>
                    <h3>{{ $row->perihal }}</h3>
                    @php
                        if(!empty($row->upload)){
                    @endphp
                        
                        <iframe src="{{asset('admin/images/tugas') }}/{{ $row->upload }}" width="600" height="400"></iframe>
                        
                    @php
                        }else{
                    @endphp
                        <img src="{{ url('admin/images/nophoto.png') }}" alt="Profile" class="rounded-circle">
                    @php
                        }
                    @endphp
                    
                    <!-- <div class=" alert alert-primary" role="alert">
                        <br />Tempat Lahir : {{ $row->tempat_lahir }}
                        <br />Tanggal Lahir: {{ $row->tgl_lahir }}     
                        <br />Jenis Kelamin: {{ $row->gender }}
                        <br />Alamat       : {{ $row->alamat }}
                        <br />Email        : {{ $row->email }}
            
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection