<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $website[0]['nama'] ?></title>
    <!-- Favicons -->
    <link href="<?= base_url('assets/admin/img/') ?><?= $website[0]['logo'] ?>" rel="icon">
    <link href="<?= base_url('assets/admin/') ?>img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Custom fonts for this template-->

    <link href="<?= base_url('assets/admin/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>summernote/summernote-bs4.min.css">
    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/admin/') ?>css/sb-admin-2.min.css" rel="stylesheet">

    <style type="text/css">
        @page {
            size: landscape;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
        <table class="table table-sm table-bordered">
                    <thead>
                        <tr class="font-weight-normal">
                            <th>No</th>
                            <th>Status</th>
                            <th>Nama Lengkap</th>
                            <th>Nama Perusahaan</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Tanggal sewa</th>
                            <th>Lama Sewa</th>
                            <th>Spesifikasi Alat</th>
                            <th>Lokasi Proyek</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php if (empty($sewa)) : ?>
                            <tr>
                                <td colspan="12" class="text-center">
                                    <div class="alert alert-danger" role="alert">
                                        Data kosong!
                                    </div>
                                </td>
                            </tr>
                        <?php endif ?>

                        <?php
                        $no = 1;
                        foreach ($sewa as $s) { ?>

                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $s['proses'] ?></td>
                                <td><?= $s['nama'] ?></td>
                                <td><?= $s['perusahaan'] ?></td>
                                <td><?= $s['email'] ?></td>
                                <td><?= $s['tlp'] ?></td>
                                <td><?= $s['tgl_sewa'] ?></td>
                                <td><?= $s['lama_sewa'] ?></td>
                                <td><?= $s['spl_alat'] ?></td>
                                <td><?= $s['lok_proyek'] ?></td>
                                <td><?= $s['tgl'] ?></td>
                    
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
       
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <script type="text/javascript">
        window.print();
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/admin/') ?>js/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/admin/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/admin/') ?>js/sb-admin-2.min.js"></script>
    </body>

 </html>