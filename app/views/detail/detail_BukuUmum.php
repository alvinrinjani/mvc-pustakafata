<div class="col-lg-9 mb-5">

  <div class="row my-4">
    <div class="card flex" style="width: 22rem;">
      <img src="<?= BASEURL; ?>/assets/img/<?= $data['detail_BukuUmum']['gambar']; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?= $data['detail_BukuUmum']['judul']; ?></h5>
        <p class="card-text"><strong> Penulis : </strong><em><?= $data['detail_BukuUmum']['penulis']; ?></em></p>
        <p class="card-text"><strong>Penerbit : </strong><em><?= $data['detail_BukuUmum']['penerbit']; ?></em></p>
        <p class="card-text"><strong>Tahun Terbit : </strong><em><?= $data['detail_BukuUmum']['tahun']; ?></em></p>
        <p class="card-text"><strong>Harga : </strong><em>Rp.<?= $data['detail_BukuUmum']['harga']; ?>,-</em></p>
      </div>
      <div class="card-footer">
        <a href="#" class="btn btn-success">Pesan Buku</a>
      </div>
    </div>
    <div class="flex" style="width: 22rem;">
      <div class="card-body">
        <h5 class="card-title"><em>Sinopsis Buku</em></h5>
        <p class="text-justify"><?= $data['detail_BukuUmum']['sinopsis']; ?></p>
      </div>
    </div>
  </div>



  <div class="row"></div>
  <!-- /.row -->

</div>
<!-- /.col-lg-9 -->