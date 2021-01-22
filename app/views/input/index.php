<div class="col mb-5">

  <div class="row my-4">
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Launch demo modal
    </button> -->

    <!-- Modal Input Buku Anak-->
    <!-- Modal Input Buku Anak-->
    <!-- Modal Input Buku Anak-->
    <div class="modal fade" id="input_buku_anak" tabindex="-1" aria-labelledby="modal_buku_anak" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal_buku_anak">Input Buku Anak</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- FORM -->
            <form action="" method="post">
              <div class="form-group">
                <label for="judul">Judul Buku</label>
                <input type="text" class="form-control" id="judul" name="judul">
              </div>
              <div class="form-group">
                <label for="penulis">Penulis</label>
                <input type="text" class="form-control" id="penulis" name="penulis">
              </div>
              <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit">
              </div>
              <div class="form-group">
                <label for="tahun">Tahun Terbit</label>
                <input type="text" class="form-control" id="tahun" name="tahun">
              </div>
              <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga">
              </div>
              <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="text" class="form-control" id="gambar" name="gambar">
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="submit_b_anak">Tambah Data Buku Anak</button>
              </div>
            </form>
            <!-- ENDFORM -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">

    <h3>
      <?php if (isset($_POST['submit_b_anak'])) {
        echo $_POST['judul'];
        echo '<br>';
        echo $_POST['penulis'];
      } ?>
    </h3>

  </div>
  <!-- /.row -->

</div>
<!-- /.col-lg-9 -->