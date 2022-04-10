<?= $this->extend('buku/buku') ?>
 <?= $this->section('page') ?>
 <div class="container">
 <h1 class="mt-5">Catalog Buku</h1>
 <p class="lead">Berikut ini adalah judul buku yang tersedia</p>
 <div class="container">
 <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">jenis buku</th>
      <th scope="col">nama buku</th>
      <th scope="col">penulis</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>novel</td>
      <td>harry potter</td>
      <td>jk rowling</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>cerita rakyat</td>
      <td>naga basukih</td>
      <td>-</td>
    </tr>
  </tbody>
</table>
</div>
 </div>
 <?= $this->endSection() ?>