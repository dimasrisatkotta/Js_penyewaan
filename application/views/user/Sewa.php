<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?=base_url("User")?>">Beranda</a></li>
          <li>Sewa</li>
        </ol>
        <h2>Reservasi Sewa dan Dapatkan Kuotasi</h2>
        <p>Isi dengan detil pekerjaan Anda, dan tunggu representatif kami untuk menghubungi Anda, segera.</p>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Alamat kami</h3>
              <p><?= $contak[0]['alamat'] ?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email kami</h3>
              <p><?= $contak[0]['email'] ?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Telepon Kami</h3>
              <p><?= $contak[0]['tlp'] ?></p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-8">
          
            <form method="POST" action="<?=base_url("User/tambah_sewa")?>" class="sewa">

              <div class="row">

                <h3 class="text-center mb-3">Kontak Penyewa</h3>
                <div class="col-md-6 form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control mt-1" id="nama"  required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <label>Nama Perusahaan</label>
                  <input type="text" class="form-control mt-1" name="perusahaan" id="perusahaan"  required>
                </div>
              </div>

              <div class="row mt-3">
                <div class="col-md-6 form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control mt-1" id="email"  required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <label>Nomor Hp</label>
                  <input type="text" class="form-control mt-1" name="tlp" id="tlp"  required>
                </div>
              </div>
              <hr>

              <div class="row mt-3">
                <h3 class="text-center mb-3">Detail Alat</h3>
                <div class="col-md-6 form-group">
                  <label>Tanggal mulai sewa</label>
                  <input type="date" name="tgl_sewa" class="form-control mt-1" id="tgl_sewa"  required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <label>Lama sewa</label>
                  <input type="text" class="form-control mt-1" name="lama_sewa" id="lama_sewa" placeholder="Misal: 2 minggu atau 3 hari" required>
                </div>
              </div> 

              <div class="row mt-3">
                <div class="col-md-6 form-group">
                  <label>Spesifikasi alat</label>
                  <textarea class="form-control mt-2" name="spl_alat" rows="5" placeholder="Misal: 1 unit Komatsu PC200 2010-up" required></textarea>
                  <small class="form-text text-muted">Isi dengan deskripsi alat yang diperlukan seperti (jika ada) jumlah unit, merk dan model, spesifikasi, tahun produksi, dll.</small>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Lokasi Proyek</label>
                  <textarea class="form-control mt-2" name="lok_proyek" rows="5" required></textarea>
                  <small class="form-text text-muted">Isi dengan alamat lengkap proyek</small>
                </div>
              </div> 
              
              <div class="text-center mt-3">
                <button class="btn btn-warning" type="submit">Kirim Pesan</button>
              </div>

            </form>

          </div>

          <div class="col-lg-4 ">
            <?= $contak[0]['maps'] ?>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

