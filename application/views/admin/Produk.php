<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Kategori</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah">Tambah data</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Gambar</th>
                            <th>Kategori</th>
                            <th>Alat</th>
                            <th>Tipe</th>
                            <th>Sewa per jam</th>
                            <th>Minimal Sewa</th>
                            <th>Harian Operator</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php if (empty($produk)) : ?>
                            <tr>
                                <td colspan="8" class="text-center">
                                    <div class="alert alert-danger" role="alert">
                                        Data kosong!
                                    </div>
                                </td>
                            </tr>
                        <?php endif ?>

                        <?php
                        foreach ($produk as $pro) { ?>

                            <tr>
                                <td> <img style="max-width: 300px;" src="<?= base_url('assets/user/') ?>img/produk/<?= $pro['gambar'] ?>" alt=""></td>
                                <td><?= $pro['kategori'] ?></td>
                                <td><?= $pro['produk'] ?></td>
                                <td><?= $pro['tipe'] ?></td>
                                <td><?= $pro['s_jam'] ?></td>
                                <td><?= $pro['min_sewa'] ?></td>
                                <td><?= $pro['har_opr'] ?></td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        Action
                                        </button>
                                        <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item" data-toggle="modal" data-target="#edit_<?= $pro['id'] ?>"><i class="fas fa-edit text-success"></i> Edit  </a>
                                        <a href="<?= base_url('admin/Master_data/hapus_produk/' . $pro['id']) ?>" class="dropdown-item tombol-hapus mt-2"><i class="fas fa-trash text-danger" style="color: #d63031;"></i> Hapus</a>
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
foreach ($produk as $pro1) { ?>
    <!-- Modal edit-->
    <div class="modal fade" id="edit_<?= $pro1['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <?= form_open_multipart('admin/Master_data/edit_produk'); ?>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" hidden name="id" value="<?= $pro1['id'] ?>">

                    <div class="form-group">
                        <label for="id_kategori">Kategori</label>
                        <select class="form-control" id="id_kategori" name="id_kategori">

                        <option value="<?= $pro1['id_kategori'] ?>"><?= $pro1['kategori'] ?></option>

                        <?php
                        foreach ($kategori as $kat2) { ?>
                            <option value="<?= $kat2['id_kategori'] ?>"><?= $kat2['kategori'] ?></option>
                        <?php } ?>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="produk">Alat</label>
                        <input type="text" class="form-control" id="produk" name="produk" value="<?= $pro1['produk'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="tipe">Tipe</label>
                        <input type="text" class="form-control" id="tipe" name="tipe" value="<?= $pro1['tipe'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="s_jam">Sewa per jam</label>
                        <input type="text" class="form-control" id="s_jam" name="s_jam" value="<?= $pro1['s_jam'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="min_sewa">Minimal Sewa</label>
                        <input type="text" class="form-control" id="min_sewa" name="min_sewa" value="<?= $pro1['min_sewa'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="har_opr">Harian operator</label>
                        <input type="text" class="form-control" id="har_opr" name="har_opr" value="<?= $pro1['har_opr'] ?>">
                    </div>

                    <br>
                    <img style="max-width: 200px;" src="<?= base_url('assets/user/') ?>img/produk/<?= $pro1['gambar'] ?>" alt="">
                    <br>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Gambar</label>
                        <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1">
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
        <div class="modal-dialog">
            <div class="modal-content">
            <?= form_open_multipart('admin/Master_data/tambah_produk'); ?>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="id_kategori">Kategori</label>
                        <select class="form-control" id="id_kategori" name="id_kategori">

                        <?php
                        foreach ($kategori as $kat2) { ?>
                            <option value="<?= $kat2['id_kategori'] ?>"><?= $kat2['kategori'] ?></option>
                        <?php } ?>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="produk">Alat</label>
                        <input type="text" class="form-control" id="produk" name="produk" required>
                    </div>

                    <div class="form-group">
                        <label for="tipe">Tipe</label>
                        <input type="text" class="form-control" id="tipe" name="tipe" required>
                    </div>

                    <div class="form-group">
                        <label for="s_jam">Sewa per jam</label>
                        <input type="text" class="form-control" id="s_jam" name="s_jam" required>
                    </div>

                    <div class="form-group">
                        <label for="min_sewa">Minimal Sewa</label>
                        <input type="text" class="form-control" id="min_sewa" name="min_sewa" required>
                    </div>

                    <div class="form-group">
                        <label for="har_opr">Harian operator</label>
                        <input type="text" class="form-control" id="har_opr" name="har_opr" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Gambar</label>
                        <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1">
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