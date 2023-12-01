<!-- Begin Page Content -->
<div class="container">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Kontak</h1>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">

                <?= form_open_multipart('admin/Dashboard/edit_contak'); ?>

                <input type="text" class="form-control" id="id" name="id" value="<?=$contak[0]['id']?>" hidden>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?=$contak[0]['alamat']?>">
                    </div>

                    <div class="form-group">
                        <label for="tlp">Nomor HP</label>
                        <input type="text" class="form-control" id="tlp" name="tlp" value="<?=$contak[0]['tlp']?>">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?=$contak[0]['email']?>">
                    </div>

                    <div class="form-group">
                        <label for="maps">Maps</label>
                        <textarea class="form-control" id="maps" name="maps" rows="3"><?=$contak[0]['maps']?></textarea>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                    </form>
                </div>
            </div>

        </div>
        <!-- /.col-->
    </div>


</div>
<!-- /.container-fluid -->