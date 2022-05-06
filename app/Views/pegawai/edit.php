<?= $this->extend('template/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Update Data Pegawai</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <h4>Periksa Entrian Form</h4>
                 </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url('pegawai/update/' . $Pegawai->id_pegawai) ?>">
                <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $Pegawai->nama; 
                        ?>">
                    </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?=$Pegawai->tempat_lahir; ?>">
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?=$Pegawai->tanggal_lahir; ?>">
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                    <option value="pria" <?= ($Pegawai->jenis_kelamin == "pria" ? "selected" : ""); ?>>Pria</option>
                    <option value="wanita" <?= ($Pegawai->jenis_kelamin == "wanita" ? "selected" : ""); ?>>Wanita</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="no_telp">No Telp</label>
                    <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= $Pegawai->no_telp; ?>" />
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat"><?= $Pegawai->alamat; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="alamat">jabatan</label>
                    <textarea class="form-control" name="jabatan" id="jabatan"><?= $Pegawai->jabatan; ?></textarea>
                </div>
                <div class="form-group">
                     <input type="submit" value="Update" class="btn btn-info" />
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>