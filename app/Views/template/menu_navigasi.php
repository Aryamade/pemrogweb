 <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Perpustakaan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a class="nav-link" href="<?= base_url('/buku4/'); ?>">Home <span class="sronly">(current)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url('/buku4/catalog/'); ?>">Catalog Buku</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url('/anggota/'); ?>">Anggota</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url('/pegawai/'); ?>">Pegawai</a></li>
            <li class="nav-item"><a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a></li>
        </ul>
    </div>
 </nav>