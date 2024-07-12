<!DOCTYPE html>
<html lang="en">
<?php include 'head.html' ?>

<body>
  <?php include 'header.html' ?>

  <?php include 'hero.html' ?>

  <main id="main">

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Galeri FTIK</h3>
          <p class="section-description">Berikut adalah Gallery Fakultas Teknologi Informasi & Komunikasi Institut Global :</p>
        </div>
        <div class="row">

          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter=".filter-2024, .filter-2023, .filter-2022, .filter-2021" class="filter-active wow fadeInRight" data-wow-delay="0.2s">All</li>
              <li data-filter=".filter-2024" class="wow fadeInRight" data-wow-delay="0.4s">2024</li>
              <li data-filter=".filter-2023" class="wow fadeInRight" data-wow-delay="0.6s">2023</li>
              <li data-filter=".filter-2022" class="wow fadeInRight" data-wow-delay="0.8s">2022</li>
              <li data-filter=".filter-2021" class="wow fadeInRight" data-wow-delay="1s">2021</li>
            </ul>
          </div>
        </div>

        <!-- object-position = kanan-kiri bawah-atas negatif-positif -->

        <div class="wow fadeInUp" data-wow-delay="1.2s">
        <div class="row" id="portfolio-wrapper">
          <div class="col-lg-3 col-md-6 portfolio-item filter-2024">
            <a href="https://photos.app.goo.gl/CzUB33hWXDUuGpzX7">
              <img src="img/gallery/2024.jpg" alt="" style="width: 450px; object-position: -80px -250px;">
              <div class="details">
                <h4>Gallery 2024</h4>
                <span>Undangan Kolaborasi Walikota</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-2024">
            <a href="">
              <img src="img/gallery/2024_2.jpg" alt="" style="width: 450px; object-position: 0px 0px;">
              <div class="details">
                <h4>Gallery 2024</h4>
                <span>Undangan Kolaborasi Walikota</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-2024">
            <a href="">
              <img src="img/gallery/2024_3.jpg" alt="" style="width: 450px; object-position: -80px 0px;">
              <div class="details">
                <h4>Gallery 2024</h4>
                <span>Undangan Kolaborasi Walikota</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-2023">
            <a href="">
              <img src="img/gallery/2023.jpg" alt="" style="width: 450px; object-position: -50px -50px;">
              <div class="details">
                <h4>Gallery 2023</h4>
                <span>Kunjungan Kepala LLDIKTI Wilayah IV</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-2023">
            <a href="">
              <img src="img/gallery/2023_2.jpg" alt="" style="width: 450px; object-position: -80px -50px;">
              <div class="details">
                <h4>Gallery 2023</h4>
                <span>Kunjungan Kepala LLDIKTI Wilayah IV</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-2023">
            <a href="">
              <img src="img/gallery/2023_3.jpg" alt="" style="width: 450px; object-position: -80px 0px;">
              <div class="details">
                <h4>Gallery 2023</h4>
                <span>Kunjungan Kepala LLDIKTI Wilayah IV</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-2022">
            <a href="">
              <img src="img/gallery/2022.jpg" alt="" style="width: 450px; object-position: -120px 0px;">
              <div class="details">
                <h4>Gallery 2022</h4>
                <span>Family Gathering Global Institute</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-2022">
            <a href="">
              <img src="img/gallery/2022_2.jpg" alt="" style="width: 450px; object-position: -100px 0px;">
              <div class="details">
                <h4>Gallery 2022</h4>
                <span>Family Gathering Global Institute</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-2022">
            <a href="">
              <img src="img/gallery/2022_3.jpg" alt="" style="width: 450px; object-position: -90px -50px;">
              <div class="details">
                <h4>Gallery 2022</h4>
                <span>Family Gathering Global Institute</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-2021">
            <a href="">
              <img src="img/gallery/2021.jpeg" alt="" style="width: 400px; object-position: -50px 0px;">
              <div class="details">
                <h4>Gallery 2021</h4>
                <span>Event Vaksinasi Global Institute</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-2021">
            <a href="">
              <img src="img/gallery/2021_2.jpeg" alt="" style="width: 450px; object-position: -80px -50px;">
              <div class="details">
                <h4>Gallery 2021</h4>
                <span>Event Vaksinasi Global Institute</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-2021">
            <a href="">
              <img src="img/gallery/2021_3.jpg" alt="" style="width: 300px; object-position: 0px 0px;">
              <div class="details">
                <h4>Gallery 2021</h4>
                <span>Event Vaksinasi Global Institute</span>
              </div>
            </a>
          </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->


  </main>

  <?php include 'footer.html'; ?>

</body>
</html>
