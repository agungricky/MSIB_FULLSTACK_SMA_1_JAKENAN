@extends('landingpage.index')
@section('content')
    <!-- ======= About Section ======= -->
    <section id="about" class="d-flex align-items-center container-fluid">
      {{-- <div class="container" data-aos="zoom-out" data-aos-delay="100"> </div> --}}
    </section>
    <section id="isi" class="">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8 m-auto">
            <p id="artikel"><i class="fa-solid fa-clock-rotate-left"></i> Artikel Terbaru</p>
            
            <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <iframe width="370" height="315" src="https://www.youtube.com/embed/ErVKZOTUZCA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
                    {{-- <h5 class="card-title"></h5> --}}
                    <p class="card-text">Senam Jumat Seluruh Guru TU dan SISWA <br> SMA N 1 JAKENAN.</p>
                  </div>
                </div>
              </div>


              <div class="col-md-6">
                <table>
                  <tr>
                    <td><iframe width="200" height="100" src="https://www.youtube.com/embed/tOkDKAwc1m4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    <td class="p-3">Profil Sekolah Sehat - SMAN 1 Jakenan, Pati</td>
                  </tr>
                  <tr>
                    <td><iframe width="200" height="100" src="https://www.youtube.com/embed/yvA5FwCflH4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    <td class="p-3">Karnaval Haul K. Abdul Muhith Ds Dukuhmulyo kec jakenan Pati 2022</td>
                  </tr>
                  <tr>
                    <td><iframe width="200" height="100" src="https://www.youtube.com/embed/DqrWx3taGIA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    <td class="p-3">PROJEK P5 Tema Gaya hidup berkelanjutan</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          
          <div class="col-md-4 m-auto mt-3">
            <p id="profile"><i class="fa-duotone fa-bookmark"></i> Kegiatan</p>
            <table cellpadding="0" cellspaccing="1" border="1" width="100%" align="center">
              <tr>
                <td class="td1">Bengkel Sastra <br> 
                  <button type="button" class="btn btn-primary btn-sm">Lihat Kegiatan</button>
                </td>
                <td><img src="{{url('assets\img\tari.jpg')}}" alt="" class="kegiatan"></td>
              </tr>
              <tr>
                <td class="td1">Baca Tulis <br> Al-Quran <br> 
                  <button type="button" class="btn btn-primary btn-sm">Lihat Kegiatan</button>
                </td>
                <td><img src="{{url('assets\img\ekskull.webp')}}" alt="" class="kegiatan"></td>
              </tr>
              <tr>
                <td class="td1">Ekskull Basket <br> 
                  <button type="button" class="btn btn-primary btn-sm">Lihat Kegiatan</button>
                </td>
                <td><img src="{{url('assets\img\basket.jpg')}}" alt="" class="kegiatan"></td>
              </tr>
              
              <tr>
                <td class="td1">Bengkel Sastra <br> 
                  <button type="button" class="btn btn-primary btn-sm">Lihat Kegiatan</button>
                </td>
                <td><img src="{{url('assets\img\teknologi.jpg')}}" alt="" style="width: 100%;
                  height: 100px;s"></td>
              </tr>

            </table>
          </div>
        </div> 
        
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8 bg-info">
              <table width="100%" border="1">
                <tr>
                  <th width="50%" calspan="3">Pengumuman</th>
                  <th width="50%">Prestasi</th>
                </tr>
                <tr>
                  <td>a</td>
                  <td>b</td>
                  <td>c</td>
                </tr>
              </table>
            </div>
            <div class="col-md-4">
              
            </div>
          </div>
        </div>  
        
        
        
      </div>
    </section>

    
<!-- End About Section -->
@endsection
