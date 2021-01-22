<div class="col-lg-9 mb-5">

  <div id="carouselExampleIndicators" class="carousel slide my-4 shadow" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="d-block img-fluid" src="assets/img/slide-one.png" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="assets/img/slide-two.png" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="assets/img/slide-three.png" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- BUKU ANAK -->
  <div class="alert alert-dark" role="alert" id="buku_anak">
    Buku Anak
  </div>
  <div class="row">
    <?php foreach ($data['buku_anak'] as $b_anak) : ?>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100 shadow">
          <a href="#"><img class="card-img-top" src="<?= 'assets/img/' . $b_anak['gambar']; ?>" alt=""></a>
          <div class="card-body">
            <h6 class="card-title text-center">
              <a href="#"><?= $b_anak['judul']; ?></a>
            </h6>
          </div>
          <h6 class="ml-4">Rp. <?= $b_anak['harga']; ?>,-</h6>
          <div class="card-footer">
            <a href=""><span class="badge badge-success">Pesan Buku</span></a>
            <!-- <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small> -->
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>


  <!-- BUKU PEMIKIRAN -->
  <div class="alert alert-dark" role="alert" id="buku_pemikiran">
    Buku Pemikiran
  </div>
  <div class="row">
    <?php foreach ($data['buku_pemikiran'] as $b_pemikiran) : ?>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100 shadow">
          <a href="#"><img class="card-img-top" src="<?= 'assets/img/' . $b_pemikiran['gambar']; ?>" alt=""></a>
          <div class="card-body">
            <h6 class="card-title text-center">
              <a href="#"><?= $b_pemikiran['judul']; ?></a>
            </h6>
          </div>
          <h6 class="ml-4">Rp. <?= $b_pemikiran['harga']; ?>,-</h6>
          <div class="card-footer">
            <a href=""><span class="badge badge-success">Pesan Buku</span></a>
            <!-- <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small> -->
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <!-- BUKU UMUM -->
  <div class="alert alert-dark" role="alert" id="buku_umum">
    Buku Umum
  </div>
  <div class="row">
    <?php foreach ($data['buku_umum'] as $b_umum) : ?>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100 shadow">
          <a href="#"><img class="card-img-top" src="<?= 'assets/img/' . $b_umum['gambar']; ?>" alt=""></a>
          <div class="card-body">
            <h6 class="card-title text-center">
              <a href="#"><?= $b_umum['judul']; ?></a>
            </h6>
          </div>
          <h6 class="ml-4">Rp. <?= $b_umum['harga']; ?>,-</h6>
          <div class="card-footer">
            <a href=""><span class="badge badge-success">Pesan Buku</span></a>
            <!-- <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small> -->
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <!-- /.row -->

</div>
<!-- /.col-lg-9 -->