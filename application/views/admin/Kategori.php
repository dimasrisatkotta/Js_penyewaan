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
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php if (empty($kategori)) : ?>
                            <tr>
                                <td colspan="4" class="text-center">
                                    <div class="alert alert-danger" role="alert">
                                        Data kosong!
                                    </div>
                                </td>
                            </tr>
                        <?php endif ?>

                        <?php
                        foreach ($kategori as $kat) { ?>

                            <tr>
                                <td> <img style="max-width: 300px;" src="<?= base_url('assets/user/') ?>img/kategori/<?= $kat['gambar'] ?>" alt=""></td>
                                <td><?= $kat['kategori'] ?></td>
                                <td><?= $kat['deskripsi'] ?></td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        Action
                                        </button>
                                        <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item" data-toggle="modal" data-target="#edit_<?= $kat['id_kategori'] ?>"><i class="fas fa-edit text-success"></i> Edit</a>
                                    <a href="<?= base_url('admin/Master_data/hapus_kategori/' . $kat['id_kategori']) ?>" class="dropdown-item tombol-hapus_kategori mt-2"><i class="fas fa-trash text-danger" style="color: #d63031;"></i> Hapus</a>
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
foreach ($kategori as $kat1) { ?>
    <!-- Modal edit-->
    <div class="modal fade" id="edit_<?= $kat1['id_kategori'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <?= form_open_multipart('admin/Master_data/edit_kategori'); ?>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" hidden name="id_kategori" value="<?= $kat1['id_kategori'] ?>">

                    <div class="form-group">
                        <label for="kategori">kategori</label>
                        <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $kat1['kategori'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi</label>
                        <textarea name="deskripsi" id="editor<?= $kat1['id_kategori'] ?>" rows="10" cols="80"><?= $kat1['deskripsi'] ?></textarea>
                    </div>
                    <br>
                    <img style="max-width: 200px;" src="<?= base_url('assets/user/') ?>img/kategori/<?= $kat1['gambar'] ?>" alt="">
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
                <?= form_open_multipart('admin/Master_data/tambah_kategori'); ?>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="kategori">kategori</label>
                        <input type="text" class="form-control" id="kategori" name="kategori">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi</label>
                        <textarea name="deskripsi" id="editor" rows="10" cols="80"></textarea>
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