

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

        <?php if ($slide[0]['status'] == 'aktif'): ?>
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(<?= base_url("assets/user/")?>img/slide/<?= $slide[0]['gambar'] ?>)">
            <div class="carousel-container">
              <div class="carousel-content">                
              </div>
            </div>
          </div>
          <?php endif; ?>

          <?php if ($slide[1]['status'] == 'aktif'): ?>
          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(<?= base_url("assets/user/")?>img/slide/<?= $slide[1]['gambar'] ?>)">
            <div class="carousel-container">
              <div class="carousel-content">                   
              </div>
            </div>
          </div>
          
          <?php endif; ?>

          <?php if ($slide[2]['status'] == 'aktif'): ?>
          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(<?= base_url("assets/user/")?>img/slide/<?= $slide[2]['gambar'] ?>)">
            <div class="carousel-container">
              <div class="carousel-content">               
              </div>
            </div>
          </div>
          
          <?php endif; ?>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Section ======= -->
    <section id="featured" class="featured">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h3><a href="#"><?= $layanan[0]['judul'] ?></a></h3>
              <p><?= $layanan[0]['deskripsi'] ?></p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h3><a href="#"><?= $layanan[1]['judul'] ?></a></h3>
              <p><?= $layanan[1]['deskripsi'] ?></p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-truck"></i>
              <h3><a href="#"><?= $layanan[2]['judul'] ?></a></h3>
              <p><?= $layanan[2]['deskripsi'] ?></p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="<?= base_url("assets/user/")?>img/about/<?= $about[0]['gambar'] ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
          <?= $about[0]['deskripsi'] ?>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

      <div class="section-title">
      <h2>Kategori proyek</h2>
      </div>

        <div class="row justify-content-md-center">

        <?php foreach ($kategori as $kt) { ?>
          <div class="col-md-2 d-flex align-items-stretch" style="position: relative; text-align: center;">
            <a href="<?= base_url('User/produk?id_kategori=' . $kt['id_kategori']) ?>">
            <div class="icon-box">
              <div class="img">
                <img src="<?= base_url('assets/user/img/kategori/') ?><?= $kt['gambar'] ?>" class="card-img-top" alt="...">
              </div>
              <h4 style="position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);">
                  <a href="<?= base_url('User/produk?id_kategori=' . $kt['id_kategori']) ?>"><?= $kt['kategori'] ?></a>
              </h4>
            </div>
          </a>
          </div>
          <?php } ?>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Solusi setiap kebutuhan proyek</h2>
          <div class="row justify-content-md-center">

          <?php foreach ($solusi as $sl) { ?>
            <div class="col-md-6">
              <div class="card text-center">
                <img src="<?= base_url('assets/user/img/solusi/') ?><?= $sl['gambar'] ?>" class="card-img-top" style="width: 635px; height: 500px;" alt="...">
                <div class="card-body">
                  <h3><?= $sl['judul'] ?></h3>
                 <article><?= $sl['deskripsi'] ?></article>
                </div>
              </div>
            </div>
            <?php } ?>

          </div>
        </div>

      </div>
    </section><!-- End Clients Section -->

  </main><!-- End #main -->
