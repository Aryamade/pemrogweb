<?= $this->extend('/template/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Anggota</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('message'))) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo session()->getFlashdata('message'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php endif; ?>
                <a href="<?= base_url('/anggota/create'); ?>" class="btn btn-primary">Tambah</a>
            <hr />
            <table class="table table-bordered">
                <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tempat dan tanggal Lahir</th>
                <th>Email</th>
                <th>Jenis Kelamin</th>
                <th>Alamat dan Nomor Telepon</th>
                <th>Action</th>
                </tr>
                <?php
                $no = 1;
                foreach ($anggota as $row) {
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row->nama; ?></td>
                    <td>
                        <?= $row->tempat_lahir; ?> <br/>
                        <?= $row->tanggal_lahir; ?>
                    </td>
                    
                    <td><?= $row->email; ?></td>
                    <td><?= $row->jenis_kelamin; ?></td>
                    <td>
                    <?= $row->alamat; ?>
                    <br/>Telpon : 
                        <?= $row->no_telp; ?>
                    </td>
                        <td>
                            <a title="Edit" href="<?= base_url("anggota/edit/$row->id_anggota"); ?>" class="btn btn-info">Edit</a>
                            <a title="Delete" href="<?= base_url("anggota/delete/$row->id_anggota") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>