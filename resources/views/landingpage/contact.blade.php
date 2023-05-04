@extends('landingpage.index')
@section('content')
     <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Hubungi Kami</h2>
            <h3><span>Apakah ada yang bisa di Bantu?</span></h3>
            <p>Dukung kami dengan memberikan support, saran, dan Kritik yang membangun</p>
          </div>
    
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6">
              <div class="info-box mb-4">
                <i class="bx bx-map"></i>
                <h3>Alamat Kami</h3>
                <p>64RR+FXM, Jl. Jakenan Winong, Sempu, Puluhan Tengah, Kec. Jakenan, Kabupaten Pati, Jawa Tengah 59182</p>
              </div>
            </div>
    
            <div class="col-lg-3 col-md-6">
              <div class="info-box  mb-4">
                <i class="bx bx-envelope"></i>
                <h3>Email</h3>
                <p>sma1jakenan@email.com</p>
              </div>
            </div>
    
            <div class="col-lg-3 col-md-6">
              <div class="info-box  mb-4">
                <i class="bx bx-phone-call"></i>
                <h3>Telpon</h3>
                <p>(0295) 4790212</p>
              </div>
            </div> 
        </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6 ">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.0907553555526!2d111.14022971424232!3d-6.758787167968956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e772d827afeb4c9%3A0x9ac1bd17bce10df9!2sSMAN%201%20Jakenan!5e0!3m2!1sen!2sid!4v1671253195312!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div>

        <div class="col-lg-6">
          <div id="text-info"></div>
          <div class="col form-group mb-3">
            <input type="text" name="name" class="form-control" id="name" placeholder="Masukan Nama Anda" id="name" required>
          </div>

          <div class="form-group mb-3">
            <select class="form-control" name="perihal" id="perihal" aria-label="Default select example">
              <option selected disabled>Perihal</option>
              <option value="Dukungan/Support">Dukungan & Support</option>
              <option value="Kritik Saran">Kritik Saran</option>
              <option value="Lainya ....">Lainya ....</option>
            </select>              
          </div>
          <div class="form-group mb-3">
            <textarea class="form-control" name="description" rows="5" placeholder="Keterangan"  id="description"></textarea>
          </div>

          <div class="text-center"><button class="btn btn-primary send">Kirim Pesan</button></div>
          <div id="text-info"></div>
        </div>
      </div>
    </div>


	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


	<script type="text/javascript">
		$(document).on('click', '.send', function() {
			/* Inputan Formulir */
			var input_name = $("#name").val(),
				input_perihal = $("#perihal").val(),
				input_description = $("#description").val();

			/* Pengaturan Whatsapp */
			var walink = 'https://web.whatsapp.com/send',
				phone = '6281276435511',
				text = 'Hallo SMAN 1 Jakenan Saya yang Bernama',
				text_yes = 'Pesanan Anda berhasil terkirim.',
				text_no = 'Isilah formulir terlebih dahulu.';

			/* Smartphone Support */
			if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
				var walink = 'whatsapp://send';
			}

			if (input_name != "" && input_perihal != "") {
				/* Eksekusi Data */
				var checkout_whatsapp = walink + '?phone=' + phone + '&text=' + text + '%0A%0A' +
					'*Nama* : ' + input_name + '%0A' +
					'*Perihal* : ' + input_perihal + '%0A' +
					'*Catatan* : ' + input_description + '%0A';

				/* jika berhasil buka Whatsapp */
				window.open(checkout_whatsapp, '_blank');
				document.getElementById("text-info").innerHTML = '<div class="alert alert-success">' + text_yes + '</div>';
			} else {
				document.getElementById("text-info").innerHTML = '<div class="alert alert-danger">' + text_no + '</div>';
			}
		});
	</script>



  </section>
  <!-- End Contact Section -->
@endsection
