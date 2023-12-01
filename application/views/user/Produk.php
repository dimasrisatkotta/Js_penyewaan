<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?= base_url('user')?>">Beranda</a></li>
          <li>Produk</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-md-9 entries">
            <h2><?=$kategori_prod[0]['kategori']?></h2>
            <p><?=$kategori_prod[0]['deskripsi']?></p><br>
                <?php foreach ($produk as $pr) { ?>

                    <article class="entry">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="<?= base_url('assets/user/img/produk/')?><?= $pr['gambar'] ?>" style="width: 200px;" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="entry-title"><?= $pr['produk'] ?></p>
                                    <p>Type : <?= $pr['tipe'] ?></p>
                                    <div class="row text-center">
                                        <div class="col-4 ">
                                            <p>Harga Sewa Per Jam</p>
                                            <strong><p><?= $pr['s_jam'] ?></p></strong>
                                        </div>
                                        <div class="col-4">
                                            <p>Minimum Sewa</p>
                                            <strong><p><?= $pr['min_sewa'] ?></p></strong>
                                        </div>
                                        <div class="col-4">
                                            <p>Harian Operator</p>
                                            <strong><p><?= $pr['har_opr'] ?></p></strong>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </article><!-- End blog entry -->
                
                <?php } ?>
            </div>


            <div class="col-md-3 text-center">

                <div class="sidebar">
                <h3 class="sidebar-title mt-3">Sewa Sekarang</h3>
                    <div class="row">
                        <div class="col bg-warning rounded">
                          <a href="<?=base_url("User/sewa")?>">
                            <button type="button" class="btn btn-warning btn-lg btn-block">PESAN SEKARANG</button>
                          </a>
                          </div>

                        <div class="col bg-success rounded mt-2">
                            <a href="https://api.whatsapp.com/send?phone=<?= $contak[0]['tlp'] ?>">
                                <button type="button" class="btn btn-success btn-lg btn-block">WHATSAPP KAMI</button>
                            </a>
                        </div>
                    </div>
               
                    <h3 class="sidebar-title mt-3">Telusuri alat berat lain</h3>
                    <div class="row">
                            <?php foreach ($kategori as $kt) { ?>
                                <a href="<?= base_url('User/produk?id_kategori=' . $kt['id_kategori']) ?>">
                                <div class="col-12 rounded mt-2 btn btn-outline-secondary">
                                    <h5><?= $kt['kategori'] ?></h5>    
                                </div>
                                </a>
                            <?php } ?>
                    </div>

                </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->

            </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
