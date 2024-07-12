<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Pastikan file head.html berisi semua yang diperlukan seperti <meta>, <title>, dan <link> ke file CSS -->
  <?php include 'head.html'; ?>
</head>
<body>
  <?php include 'header.html'; ?>
  <?php include 'hero.html'; ?>

  <main id="main">
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Admission</h3>
          <p class="section-description">Silakan anda mengisi form online yang telah disediakan dengan benar, nanti tim dari Global Institute akan menjelaskan detail terkait tata cara pendaftaran.</p>
        </div>
      </div>

      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>Jl. Aria Santika No. 43<br>Provinsi Banten, Indonesia 15114</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>kampus@global.ac.id</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <a href="https://api.whatsapp.com/send?phone=6282219006618&text=[INFO%20KULIAH%20DAN%20PENDAFTARAN]"><p>+62 822-1900-6618</p></a>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="process-form.php" method="post" role="form" class="contactForm" novalidate>
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap" data-rule="required" data-msg="Tolong Masukkan Nama Lengkap Terlebih Dahulu" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Alamat Email" data-rule="email" data-msg="Tolong Masukkan Email Dengan Benar" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="No Telepon" data-rule="required" data-msg="Tolong Masukkan Nomor Telepon Terlebih Dahulu" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Tolong Tunjukkan EKSISTENSI Kekuatan dan Kesungguhan ANDA!! Kepada Seluruh Rakyat Manusia Di Muka Bumi Bahwa Anda Ingin Mendaftar" placeholder="Keterangan">Saya Ingin Mendaftar!</textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Kirim</button></div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section><!-- #contact -->
  </main>

  <?php include 'footer.html'; ?>
</body>
</html>
