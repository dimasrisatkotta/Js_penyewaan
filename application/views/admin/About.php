<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">About</h1>

    <div class="row">
        <!-- <?= $this->session->flashdata('message'); ?> -->
        <div class="flash-data" data-flashdata=" <?= $this->session->flashdata('message'); ?>"></div>
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">
                        Edit Profil
                    </h3>
                </div>
                <!-- /.card-header -->
                <?= form_open_multipart('admin/Dashboard/edit_about'); ?>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-5">
                                <img style="max-width: 400px;" src="<?= base_url('assets/user/') ?>img/about/<?= $about[0]['gambar'] ?>" alt="">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Gambar</label>
                                    <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <input hidden type="text" name="id" value="<?= $about[0]['id'] ?>">
                                <textarea id="ckeditor" name="deskripsi"><?= $about[0]['deskripsi'] ?></textarea> 
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fas-save"></i> Simpan</button>
                    </div>
                </form>
            </div>

        </div>
        <!-- /.col-->
    </div>

</div>
<!-- /.container-fluid -->