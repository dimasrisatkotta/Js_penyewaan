<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data Penyewa</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header">
        <form action="<?= base_url('admin/Master_data/sewa') ?>" method="post">
            <div class="row">

                <h5 class="mt-2 ml-3">Periode</h5>

                <div class="col-md-2">
                <input type="date" class="form-control" name="awal" value="<?=$awal?>" required>
                </div>

                <div class="col-md-2">
                <input type="date" class="form-control" name="akhir" value="<?=$akhir?>" required>
                </div>

                <div class="form-group">
                    <select class="form-control" id="proses" name="proses">
                    <option value="<?=$proses?>"><?=$proses?></option>
                    <option value="ALL">ALL</option>
                    <option value="Proses">Proses</option>
                    <option value="Belum diproses">Belum diproses</option>
                    <option value="Pembatalan">Pembatalan</option>
                    </select>
                </div>

                <div class="col-md-4">
                <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Search"><i class="fas fa-search"></i></button>
                <a href="<?= base_url('admin/Master_data/cetak?awal='.$awal .'&'.'akhir='. $akhir.'&'.'proses='. $proses) ?>" class='btn btn-success' target="_blank" data-toggle="tooltip" data-placement="top" title="Print"><i class='fas fa-print'></i></a>
                </div>

            </div>

        </form>

        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah"><i class="fas fa-plus text-light"> Tambah Data</button>
        </div>
        <div class="card-body font-weight-normal">
            <div class="table-responsive">
                <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
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
                            <th>Action</th>
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
                                <td  class="text-center"><?= $no++ ?></td>
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
                                
                                <td>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        Action
                                        </button>
                                        <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item" data-toggle="modal" data-target="#edit_<?= $s['id'] ?>"><i class="fas fa-edit text-success"></i> Edit  </a>
                                        <a href="<?= base_url('admin/Master_data/hapus_sewa/' . $s['id']) ?>" class="dropdown-item tombol-hapus mt-2"><i class="fas fa-trash text-danger" style="color: #d63031;"></i> Hapus</a>
                                        </div>
                                    </div>  
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php
foreach ($sewa as $s1) { ?>
    <!-- Modal edit-->
    <div class="modal fade" id="edit_<?= $s1['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg text-dark">
            <div class="modal-content">
                <?= form_open_multipart('admin/Master_data/edit_sewa'); ?>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" hidden name="id" value="<?= $s1['id'] ?>">

                    <div class="form-group">
                        <label for="proses">Status</label>
                        <select class="form-control" id="proses" name="proses">

                        <option value="<?= $s1['proses'] ?>"><?= $s1['proses'] ?></option>
                        <option value="Proses">Proses</option>
                        <option value="Belum diproses">Belum diproses</option>
                        <option value="Pembatalan">Pembatalan</option>

                        </select>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama">Nama lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $s1['nama'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="perusahaan">Nama perusahaan</label>
                                <input type="text" class="form-control" id="perusahaan" name="perusahaan" value="<?= $s1['perusahaan'] ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?= $s1['email'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tlp">Telepon</label>
                                <input type="text" class="form-control" id="tlp" name="tlp" value="<?= $s1['tlp'] ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgl_sewa">Tanggal Sewa</label>
                                <input type="date" class="form-control" id="tgl_sewa" name="tgl_sewa" value="<?= $s1['tgl_sewa'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lama_sewa">Lama Sewa</label>
                                <input type="text" class="form-control" id="lama_sewa" name="lama_sewa" value="<?= $s1['lama_sewa'] ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="spl_alat">Spesifikasi alat</label>
                                <textarea name="spl_alat" id="editor<?= $s1['id'] ?>" rows="10" cols="80"><?= $s1['spl_alat'] ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lok_proyek">Lokasi Proyek</label>
                                <textarea name="lok_proyek" id="editora<?= $s1['id'] ?>" rows="10" cols="80"><?= $s1['lok_proyek'] ?></textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>

<?php } ?>

<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg text-dark">
            <div class="modal-content">
            <?= form_open_multipart('admin/Master_data/tambah_sewa'); ?>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="proses">Status</label>
                        <select class="form-control" id="proses" name="proses">

                        <option value="Belum diproses">Belum diproses</option>
                        <option value="Proses">Proses</option>
                        <option value="Pembatalan">Pembatalan</option>

                        </select>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama">Nama lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="perusahaan">Nama perusahaan</label>
                                <input type="text" class="form-control" id="perusahaan" name="perusahaan">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tlp">Telepon</label>
                                <input type="text" class="form-control" id="tlp" name="tlp">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgl_sewa">Tanggal Sewa</label>
                                <input type="date" class="form-control" id="tgl_sewa" name="tgl_sewa">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lama_sewa">Lama Sewa</label>
                                <input type="text" class="form-control" id="lama_sewa" name="lama_sewa">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="spl_alat">Spesifikasi alat</label>
                                <textarea name="spl_alat" id="editortambah1" rows="10" cols="80"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lok_proyek">Lokasi Proyek</label>
                                <textarea name="lok_proyek" id="editortambah2" rows="10" cols="80"></textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>