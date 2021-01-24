<div class="col-lg-9 mb-5">

  <div class="row my-4">
    <div class="card flex" style="width: 22rem;">
      <img src="<?= BASEURL; ?>/assets/img/<?= $data['detail_BukuPemikiran']['gambar']; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title merienda"><?= $data['detail_BukuPemikiran']['judul']; ?></h5>
        <p class="card-text gupter"><strong> Penulis : </strong><em><?= $data['detail_BukuPemikiran']['penulis']; ?></em></p>
        <p class="card-text gupter"><strong>Penerbit : </strong><em><?= $data['detail_BukuPemikiran']['penerbit']; ?></em></p>
        <p class="card-text gupter"><strong>Tahun Terbit : </strong><em><?= $data['detail_BukuPemikiran']['tahun']; ?></em></p>
        <p class="card-text gupter"><strong>Harga : </strong><em>Rp.<?= $data['detail_BukuPemikiran']['harga']; ?>,-</em></p>
      </div>
      <div class="card-footer">
        <a href="#" class="btn btn-success">Pesan Buku</a>
      </div>
    </div>
    <div class="flex" style="width: 22rem;">
      <div class="card-body">
        <h5 class="card-title"><em>Sinopsis Buku</em></h5>
        <p class="text-justify"><?= $data['detail_BukuPemikiran']['sinopsis']; ?></p>
      </div>
    </div>
  </div>



  <div class="row"></div>
  <!-- /.row -->

</div>
<!-- /.col-lg-9 -->