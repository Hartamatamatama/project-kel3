<!DOCTYPE html>
<html lang="en">
<?php include 'head.html' ?>

<body>
  <?php include 'header.html' ?>

  <?php include 'hero.html' ?>

  <main id="main">
    

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Prestasi</h3>
          <p class="section-description">Berikut adalah prestasi-prestasi Mahasiswa Fakultas Teknologi Informasi & Komunikasi Institut Global :</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-flag-checkered"></i></a></div>
              <h4 class="title"><a href="">Circuit Orienteering</a></h4>
              <p class="description">Juara Umum Lomba Circuit Orienteering Banten</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-futbol-o fa-spin"></i></a></div>
              <h4 class="title"><a href="">Petanque</a></h4>
              <p class="description">Kejuaraan Nasional Mahasiswa UNJ Open Series II</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-files-o"></i></a></div>
              <h4 class="title"><a href="">Film Dokumenter</a></h4>
              <p class="description">Juara 2 Lomba Film Dokumenter Kategori Informatif, Tingkat Provinsi Banten (Dinas Pendidikan Provinsi)</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-laptop"></i></a></div>
              <h4 class="title"><a href="">Web Design</a></h4>
              <p class="description">Juara 2 Web Design Tingkat Kota Tangerang</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="1s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-camera-retro"></i></a></div>
              <h4 class="title"><a href="">Photography</a></h4>
              <p class="description">Juara 1 Lomba Photography, Tingkat Provinsi Banten (Dinas Pendidikan Provinsi)</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- #services -->

     <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio">
      <div class="container wow fadeInUp">

        <div class="row">

          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter=".filter-circuit, .filter-petanque, .filter-film, .filter-web, .filter-photography" class="filter-active wow fadeInRight" data-wow-delay="0.2s">All</li>
              <li data-filter=".filter-circuit" class="wow fadeInRight" data-wow-delay="0.4s">Circuit</li>
              <li data-filter=".filter-petanque" class="wow fadeInRight" data-wow-delay="0.6s">Petanque</li>
              <li data-filter=".filter-film" class="wow fadeInRight" data-wow-delay="0.8s">FILM</li>
              <li data-filter=".filter-web" class="wow fadeInRight" data-wow-delay="1s">WEB</li>
              <li data-filter=".filter-photography" class="wow fadeInRight" data-wow-delay="1s">Photography</li>
            </ul>
          </div>
        </div>

        <!-- object-position = kanan-kiri bawah-atas negatif-positif -->

        <div class="wow fadeInUp">
          <div class="row" id="portfolio-wrapper">

          <!-- CIRCUIT -->
            <div class="col-lg-3 col-md-6 portfolio-item filter-circuit">
              <a href="https://photos.app.goo.gl/DtcECbjQW7E2nzsY8">
                <img src="img/gallery/circuit1.jpg" alt="" style="width: 450px; object-position: -80px -50px;">
              </a>
              <div class="details">
                <h4>Circuit Orienteering</h4>
                <span>Juara Umum Provinsi Banten</span>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 portfolio-item filter-circuit">
              <a href="https://photos.app.goo.gl/DtcECbjQW7E2nzsY8">
                <img src="img/gallery/circuit2.jpg" alt="" style="width: 450px; object-position: -80px -10px;">
              </a>
              <div class="details">
                <h4>Circuit Orienteering</h4>
                <span>Juara Umum Provinsi Banten</span>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 portfolio-item filter-circuit">
              <a href="https://photos.app.goo.gl/DtcECbjQW7E2nzsY8">
                <img src="img/gallery/circuit3.jpg" alt="" style="width: 450px; object-position: -80px 0px;">
              </a>
              <div class="details">
                <h4>Circuit Orienteering</h4>
                <span>Juara Umum Provinsi Banten</span>
              </div>
            </div>

            <!-- PETANQUE -->

            <div class="col-lg-3 col-md-6 portfolio-item filter-petanque">
              <a href="https://global.ac.id/global-institute-kembali-berprestasi-di-kejuaraan-nasional-mahasiswa-unj-open-series-ii/">
                <img src="img/gallery/petanque1.jpg" alt="" style="width: 350px; object-position: -80px 0px;">
              </a>
              <div class="details">
                <h4>Petanque</h4>
                <span>Kejuaraan Nasional Open Series II</span>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 portfolio-item filter-petanque">
              <a href="https://global.ac.id/global-institute-kembali-berprestasi-di-kejuaraan-nasional-mahasiswa-unj-open-series-ii/">
                <img src="img/gallery/petanque2.jpg" alt="" style="width: 450px; object-position: -80px 0px;">
              </a>
              <div class="details">
                <h4>Petanque</h4>
                <span>Kejuaraan Nasional Open Series II</span>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 portfolio-item filter-petanque">
              <a href="https://global.ac.id/global-institute-kembali-berprestasi-di-kejuaraan-nasional-mahasiswa-unj-open-series-ii/">
                <img src="img/gallery/petanque3.jpg" alt="" style="width: 350px; object-position: -45px 0px;">
              </a>
              <div class="details">
                <h4>Petanque</h4>
                <span>Kejuaraan Nasional Open Series II</span>
              </div>
            </div>

            <!-- FILM -->

            <div class="col-lg-3 col-md-6 portfolio-item filter-film">
              <a href="https://global.ac.id/achievements/">
                <img src="img/gallery/film1.jpg" alt="" style="width: 350px; object-position: -35px 0px;">
              </a>
              <div class="details">
                <h4>Film Dokumenter</h4>
                <span>Juara 2 Tingkat Provinsi Banten</span>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 portfolio-item filter-film">
              <a href="https://global.ac.id/achievements/">
                <img src="img/gallery/film2.jpg" alt="" style="width: 300px; object-position: -35px -45px;">
              </a>
              <div class="details">
                <h4>Film Dokumenter</h4>
                <span>Juara 2 Tingkat Provinsi Banten</span>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 portfolio-item filter-film">
              <a href="https://global.ac.id/achievements/">
                <img src="img/gallery/film3.jpg" alt="" style="width: 300px; object-position: -15px 0px;">
              </a>
              <div class="details">
                <h4>Film Dokumenter</h4>
                <span>Juara 2 Tingkat Provinsi Banten</span>
              </div>
            </div>

            <!-- WEB -->

            <div class="col-lg-3 col-md-6 portfolio-item filter-web">
              <a href="https://photos.app.goo.gl/p2PBueFfPvcKPNHL7">
                <img src="img/gallery/web1.jpg" alt="" style="width: 450px; object-position: -50px 0px;">
              </a>
              <div class="details">
                <h4>Web Design</h4>
                <span>Juara 2 Web Design Tingkat Kota Tangerang</span>
              </div>
            </div>

            <!-- PHOTOGRAPHY -->

            <div class="col-lg-3 col-md-6 portfolio-item filter-photography">
              <a href="https://uin-malang.ac.id/r/190301/diklat-jc-produksi-mahasiswa-melek-fotografi.html">
                <img src="img/gallery/photography1.jpg" alt="" style="width: 400px; object-position: -50px 0px;">
              </a>
              <div class="details">
                <h4>Photography</h4>
                <span>Juara 1 Tingkat Provinsi Banten</span>
              </div>
            </div>
            
            <div class="col-lg-3 col-md-6 portfolio-item filter-photography">
              <a href="https://uin-malang.ac.id/r/190301/diklat-jc-produksi-mahasiswa-melek-fotografi.html">
                <img src="img/gallery/photography2.jpg" alt="" style="width: 350px; object-position: -50px 0px;">
              </a>
              <div class="details">
                <h4>Photography</h4>
                <span>Juara 1 Tingkat Provinsi Banten</span>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- #portfolio -->
    

  </main>

  <?php include 'footer.html'; ?>

</body>
</html>
