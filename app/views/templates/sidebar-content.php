<div class="container-fluid">
  <!-- Wrapper Kategori Buku Anak -->
  <div class="alert alert-warning fredoka mt-4 col-sm-12" role="alert" id="buku_anak">
    Buku Anak
  </div>
  <div class="mb-3 d-flex justify-content-around">
    <div class="row d-flex">
      <?php for ($i = 0; $i < 10; $i++) : ?>
        <div class="col-4">
          <div class="mb-3">
            <div class="card-deck">
              <div class="card shadow">
                <a href=""><img class="card-img-top shadow" src="<?= BASEURL; ?>/assets/img/ibu-pilihan-tuhan.png" alt=""></a>
                <div class="card-body">
                  <h6 class="card-title text-center">
                  </h6>
                </div>
                <a class="merienda text-center py-3" href=""></a>
                <h6 class="ml-4 sniglet"></h6>
                <div class="card-footer text-center">
                  <a href=""><span class="badge badge-success">Pesan Buku</span></a>
                  <!-- <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</div>