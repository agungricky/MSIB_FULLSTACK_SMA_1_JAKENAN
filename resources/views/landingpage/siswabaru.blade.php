@extends('landingpage.index')
@section('content')
<div class="container-fluid">
            <div class="row">
                <div class="col-md-9 famplet">
                    <img src="{{url('assets/img/formulir/famplet.jpg')}}" alt="" id="imgvisimisi" class="mt-3">
                </div>
    
                <div class="col-md-3">
                    <div class="tentangweb mt-3">
                        <h3>Link Download</h3>
                        <hr>
                        <button type="button" class="btn btn-primary"><a href="{{url('assets/img/formulir/famplet.jpg')}}" class="text-white">Pamflet</a></button>
                        <button type="button" class="btn btn-danger"><a href="{{url('assets/img/formulir/formulir.pdf')}}" class="text-white">Formulir</a></button>
                        <button type="button" class="btn btn-success"><a href="{{url('assets/img/formulir/twibon.pptx')}}" class="text-white">Twibon</a></button>
                    </div>

                    <div class="tentangweb">
                        <h3>TENTANG WEB</h3>
                        <hr>
                        Website resmi SMA Negeri 1 Kota Probolinggo sebagai media informasi publik
                    </div>

                    <div class="alamat">
                        <h3 id="alamat">ALAMAT</h3>
                        <hr>
                        <p class="p_bold">Address</p>
                        Jl. Soekarno Hatta 137 Probolinggo Jawa Timur
                        Call : 0334-421566 <br> <br>
                        
                        <p class="p_bold">Hours</p>
                        Monday—Friday: 7:00AM-15:00PM
                    </div>

                    <div class="cari">
                        <h3 id="cari">PENCARIAN</h3>
                        <hr>
                        <div class="input-group mb-3">
                            <button class="btn btn-primary" type="button" id="button-addon1">Cari</button>
                            <input type="text" class="form-control" placeholder="Ingin mencari apa ..." aria-label="Example text with button addon" aria-describedby="button-addon1">
                        </div>                          
                    </div>
                </div>
            </div>
    </div>
@endsection
