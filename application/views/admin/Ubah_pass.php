<!-- Begin Page Content -->
<div class="container">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Solusi</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

        </div>
        <div class="card-body">
        <?= form_open_multipart('admin/Dashboard/ubah_sandi'); ?>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Password lama</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="pass_lama" placeholder="Password lama" required>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Password baru</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="pass_baru" placeholder="Password baru" required>
                </div>

                <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Simpan</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->