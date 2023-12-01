<!-- Begin Page Content -->
<div class="container">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Website</h1>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit">
                        <i class="fas fa-folder-plus"></i> Edit Data
                    </button>
                </div>
                <div class="card-body">

                    <br><br><br>
                    <h3>Nama Website : <?= $website[0]['nama'] ?></h3>
                    <br>
                    <img style="width: 300px;" src="<?= base_url('assets/user/img/website/') ?><?= $website[0]['logo'] ?>" alt="">
                </div>
            </div>

        </div>
        <!-- /.col-->
    </div>


</div>
<!-- /.container-fluid -->

<!-- Modal tambah-->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <?= form_open_multipart('admin/Dashboard/edit_data'); ?>
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="text" name="id" value="<?= $website[0]['id'] ?>" hidden>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Nama website</label>
                    <input type="text" name="nama" class="form-control-file" id="exampleFormControlFile1" value="<?= $website[0]['nama'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Gambar</label>
                    <input type="file" name="foto" class="form-control-file" id="exampleFormControlFile1">
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