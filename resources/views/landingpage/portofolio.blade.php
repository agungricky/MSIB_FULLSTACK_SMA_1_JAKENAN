 @extends('landingpage.index')
 @section('content')
      <!-- ======= Portfolio Section ======= -->
 <section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Portfolio</h2>
      <h3>Dokumentasi <span>Kami</span></h3>
      <p>Inilah Dokumentasi kegiatan kegiatan Kami di selala Pembelajaran</p>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".filter-app">Kerjabakti</li>
          <li data-filter=".filter-card">Event</li>
          <li data-filter=".filter-web">Prestasi</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="{{url('assets/img/portfolio/baksos3.jpg')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Bakti Sosial</h4>
          <p>Bersih desa Padangan</p>
          <a href="{{url('assets/img/portfolio/baksos3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="detail"><i class="bx bx-plus"></i></a>
          <a href="https://sman1terara.sch.id/berita/bakti-sosial-sma-negeri-1-terara-di-masjid-terara-sebagai-bentuk-kepedulian-lingkungan" class="details-link" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
        </div>
      </div>
      

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="{{url('assets/img/portfolio/baksos.jpg')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Bakti Sosial</h4>
          <p>Bersih desa Jatiredjo</p>
          <a href="{{url('assets/img/portfolio/baksos.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Detail"><i class="bx bx-plus"></i></a>
          <a href="https://sman1terara.sch.id/berita/bakti-sosial-sma-negeri-1-terara-di-masjid-terara-sebagai-bentuk-kepedulian-lingkungan" class="details-link" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="{{url('assets/img/portfolio/baksos2.jpg')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Bakti Sosial</h4>
          <p>Bersih desa Jatiwilangan</p>
          <a href="{{url('assets/img/portfolio/baksos2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Detail"><i class="bx bx-plus"></i></a>
          <a href="https://www.sman2tpi.sch.id/344-kegiatan-bakti-sosial-smandascout-charity-action-2021" class="details-link" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="{{url('assets/img/portfolio/baksos1.jpeg')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Bakti Sosial</h4>
          <p>Bersih desa Pujon</p>
          <a href="{{url('assets/img/portfolio/baksos1.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="detail"><i class="bx bx-plus"></i></a>
          <a href="https://sman1terara.sch.id/berita/bakti-sosial-sma-negeri-1-terara-di-masjid-terara-sebagai-bentuk-kepedulian-lingkungan" class="details-link" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="{{url('assets/img/portfolio/baksos4.jpg')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Bakti Sosial</h4>
          <p>Bersih desa Bendo</p>
          <a href="{{url('assets/img/portfolio/baksos4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="detail"><i class="bx bx-plus"></i></a>
          <a href="https://sman1terara.sch.id/berita/bakti-sosial-sma-negeri-1-terara-di-masjid-terara-sebagai-bentuk-kepedulian-lingkungan" class="details-link" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <img src="{{url('assets/img/portfolio/event.jpg')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Event</h4>
          <p>Millad 2019</p>
          <a href="{{url('assets/img/portfolio/event.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="detail"><i class="bx bx-plus"></i></a>
          <a href="https://sman1terara.sch.id/berita/bakti-sosial-sma-negeri-1-terara-di-masjid-terara-sebagai-bentuk-kepedulian-lingkungan" class="details-link" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <img src="{{url('assets/img/portfolio/event1.jpg')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Event</h4>
          <p>Pagelaran Seni</p>
          <a href="{{url('assets/img/portfolio/event1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="detail"><i class="bx bx-plus"></i></a>
          <a href="https://sman1terara.sch.id/berita/bakti-sosial-sma-negeri-1-terara-di-masjid-terara-sebagai-bentuk-kepedulian-lingkungan" class="details-link" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <img src="{{url('assets/img/portfolio/event2.jpg')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Event</h4>
          <p>Perpisahan 2020</p>
          <a href="{{url('assets/img/portfolio/event2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="detail"><i class="bx bx-plus"></i></a>
          <a href="https://sman1terara.sch.id/berita/bakti-sosial-sma-negeri-1-terara-di-masjid-terara-sebagai-bentuk-kepedulian-lingkungan" class="details-link" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <img src="{{url('assets/img/portfolio/prestasi.jpg')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Prestasi</h4>
          <p>Penghargaan Pramuka 2019</p>
          <a href="{{url('assets/img/portfolio/prestasi.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="detail"><i class="bx bx-plus"></i></a>
          <a href="https://sman1terara.sch.id/berita/bakti-sosial-sma-negeri-1-terara-di-masjid-terara-sebagai-bentuk-kepedulian-lingkungan" class="details-link" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <img src="{{url('assets/img/portfolio/prestasi1.jpg')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Prestasi</h4>
          <p>Penghargaan Olimpiade Sains</p>
          <a href="{{url('assets/img/portfolio/prestasi1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="detail"><i class="bx bx-plus"></i></a>
          <a href="https://sman1terara.sch.id/berita/bakti-sosial-sma-negeri-1-terara-di-masjid-terara-sebagai-bentuk-kepedulian-lingkungan" class="details-link" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <img src="{{url('assets/img/portfolio/prestasi2.jpg')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Prestasi</h4>
          <p>Kejuaraan Bahasa Inggris 2020</p>
          <a href="{{url('assets/img/portfolio/prestasi2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="detail"><i class="bx bx-plus"></i></a>
          <a href="https://sman1terara.sch.id/berita/bakti-sosial-sma-negeri-1-terara-di-masjid-terara-sebagai-bentuk-kepedulian-lingkungan" class="details-link" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <img src="{{url('assets/img/portfolio/prestasi3.jpg')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Prestasi</h4>
          <p>Penghargaan Cerdas Cermat Tingkat SMA</p>
          <a href="{{url('assets/img/portfolio/prestasi3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="detail"><i class="bx bx-plus"></i></a>
          <a href="https://sman1terara.sch.id/berita/bakti-sosial-sma-negeri-1-terara-di-masjid-terara-sebagai-bentuk-kepedulian-lingkungan" class="details-link" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <img src="{{url('assets/img/portfolio/prestasi4.jpg')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Prestasi</h4>
          <p>Kejuaraan Pentas Seni wil.Jogja</p>
          <a href="{{url('assets/img/portfolio/prestasi4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="detail"><i class="bx bx-plus"></i></a>
          <a href="https://sman1terara.sch.id/berita/bakti-sosial-sma-negeri-1-terara-di-masjid-terara-sebagai-bentuk-kepedulian-lingkungan" class="details-link" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <img src="{{url('assets/img/portfolio/prestasi5.jpg')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Prestasi</h4>
          <p>Kejuaraan Olimpiade Matematika.</p>
          <a href="{{url('assets/img/portfolio/prestasi5.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="detail"><i class="bx bx-plus"></i></a>
          <a href="https://sman1terara.sch.id/berita/bakti-sosial-sma-negeri-1-terara-di-masjid-terara-sebagai-bentuk-kepedulian-lingkungan" class="details-link" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Section -->
 @endsection
 
