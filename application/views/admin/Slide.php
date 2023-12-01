<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Slide</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Gambar</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php if (empty($slide)) : ?>
                            <tr>
                                <td colspan="3" class="text-center">
                                    <div class="alert alert-danger" role="alert">
                                        Data kosong!
                                    </div>
                                </td>
                            </tr>
                        <?php endif ?>

                        <?php
                        foreach ($slide as $sld) { ?>

                            <tr>
                               
                                <td> <img style="max-width: 400px;" src="<?= base_url('assets/user/') ?>img/slide/<?= $sld['gambar'] ?>" alt=""></td>
                                <td><?= $sld['status'] ?></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#edit_<?= $sld['id'] ?>"><i class="fas fa-edit"></i> Edit</a>
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
foreach ($slide as $sld1) { ?>
    <!-- Modal edit-->
    <div class="modal fade" id="edit_<?= $sld1['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <?= form_open_multipart('admin/Slide/edit_data'); ?>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" hidden name="id" value="<?= $sld1['id'] ?>">

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Status</label>
                        <select class="form-control" id="status" name="status">
                        <option value="<?= $sld1["status"]?>"><?= $sld1["status"]?></option>
                        <option value="aktif">aktif</option>
                        <option value="non-aktif">non-aktif</option>
                        </select>
                    </div>
                    <img style="max-width: 200px;" src="<?= base_url('assets/user/') ?>img/slide/<?= $sld1['gambar'] ?>" alt="">
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