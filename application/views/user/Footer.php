
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
            <?= $contak[0]['alamat'] ?><br>
              <strong>Phone:</strong> <?= $contak[0]['tlp'] ?><br>
              <strong>Email:</strong> <?= $contak[0]['email'] ?><br>
            </p>

          </div>

          <div class="col-lg-5 col-md-6 footer-info">
            <h3>About <?= $website[0]['nama'] ?></h3>
            <article><?= substr( $about[0]['deskripsi'], 0, 500) ?>.....</article>
            
          </div>

          <div class="col-lg-4 col-md-6 footer-info">
           
            <p><?= $contak[0]['maps'] ?></p>
            
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Eterna</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url("assets/user/") ?>js/jquery-3.6.0.min.js"></script>
  <script src="<?= base_url("assets/user/")?>vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?= base_url("assets/user/")?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url("assets/user/")?>vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url("assets/user/")?>vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url("assets/user/")?>vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url("assets/user/")?>vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?= base_url("assets/user/")?>vendor/php-email-form/validate.js"></script>

  <script src="<?= base_url('assets/user/') ?>dist/sweetalert2.all.min.js"></script>
  

  <!-- Template Main JS File -->
  <script src="<?= base_url("assets/user/")?>js/main.js"></script>

  
<script>
  <?php if ($this->session->flashdata('sukses')) { ?>
    Swal.fire({
      'Good job!',
      'You clicked the button!',
      'success',
    });
  <?php } ?>
</script>

</body>

</html>