<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Layanan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php if (empty($layanan)) : ?>
                            <tr>
                                <td colspan="3" class="text-center">
                                    <div class="alert alert-danger" role="alert">
                                        Data kosong!
                                    </div>
                                </td>
                            </tr>
                        <?php endif ?>

                        <?php
                        foreach ($layanan as $lyn) { ?>

                            <tr>
                                <td><?= $lyn['judul'] ?></td>
                                <td><?= $lyn['deskripsi'] ?></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#edit_<?= $lyn['id'] ?>"><i class="fas fa-edit"></i> Edit</a>
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
foreach ($layanan as $lyn1) { ?>
    <!-- Modal edit-->
    <div class="modal fade" id="edit_<?= $lyn1['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                 
                <?= form_open_multipart('admin/Layanan/edit_data'); ?>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" hidden name="id" value="<?= $lyn1['id'] ?>">

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Judul</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="judul" value="<?= $lyn1['judul'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi</label>
                        <textarea name="deskripsi" id="editor<?= $lyn1['id'] ?>" rows="10" cols="80"><?= $lyn1['deskripsi'] ?></textarea>
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