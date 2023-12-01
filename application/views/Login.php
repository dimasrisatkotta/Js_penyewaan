<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login <?= $website[0]['nama'] ?></title>

    <!-- Favicons -->
    <link href="<?= base_url('assets/user/img/website/') ?><?= $website[0]['logo'] ?>" rel="icon">
    <link href="<?= base_url('assets/user/') ?>img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/admin/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles">
    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/admin/') ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="" style="background-image: url(<?= base_url('assets/user/') ?>img/portfolio/2.jpg)">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-6">
                <div class="card shadow-lg my-5" style="box-shadow: 7px 10px 10px 10px;">
                    <div class="card-body p-0">

                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900">Welcome</h1>
                                        <div class="text-center mb-5">
                                            <img class="text-center rounded mt-2" style="max-width: 230px;" src="<?= base_url('assets/user/') ?>img/website/<?= $website[0]['logo'] ?>" alt="">
                                        </div>
                                    </div>
                                    <form class="user" action="<?= base_url('Login') ?>" method="post">
                                        <div class="form-group">
                                            <label class="font-weight-bold ml-2" for="exampleInputEmail1">Username</label>
                                            <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold ml-2" for="exampleInputEmail1">Password</label>
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                        </div>
                                        <hr>
                                        <div class="text-center">

                                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Login
                                            </button>
                                        </div>
                                    </form>
                                    <hr>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script src="<?= base_url('assets/admin/') ?>js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/admin/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/admin/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/admin/') ?>js/sb-admin-2.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>dist/sweetalert2.all.min.js"></script>

    <script>
        <?php if ($this->session->flashdata('pass_salah')) { ?>
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: 'Password yang anda masukan salah'

            });
        <?php } ?>

        <?php if ($this->session->flashdata('pass_user_salah')) { ?>
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: 'Password dan Username yang anda masukan salah'

            });
        <?php } ?>

        <?php if ($this->session->flashdata('ubah_pass')) { ?>
            Swal.fire({
                icon: 'success',
                title: 'Sukses',
                text: 'Anda Berhasil Mengubah Password, silhkan login kembali'

            });
        <?php } ?>
    </script>

</body>

</html>