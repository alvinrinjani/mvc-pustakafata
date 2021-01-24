<div class="col-lg-9 mb-5">

  <div class="row my-4">

    <div class="col">
      <?php Flasher::flash(); ?>
    </div>

    <!-- Modal Input-->
    <!-- Modal Input-->
    <!-- Modal Input-->
    <div class="modal fade" id="input_buku" tabindex="-1" aria-labelledby="modal_buku" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal_buku">Input Data Buku</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- FORM -->
            <form action="<?= BASEURL; ?>/admin/input_buku" method="post">
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
              <fieldset class="form-group">
                <div class="row">
                  <legend class="col-form-label col-sm-2 pt-0">Kategori</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="radios" id="buku_anak" value="buku_anak">
                      <label class="form-check-label" for="buku_anak">
                        Buku Anak
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="radios" id="buku_pemikiran" value="buku_pemikiran">
                      <label class="form-check-label" for="buku_pemikiran">
                        Buku Pemikiran
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="radios" id="buku_umum" value="buku_umum">
                      <label class="form-check-label" for="buku_umum">
                        Buku Umum
                      </label>
                    </div>
                  </div>
              </fieldset>
              <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="text" class="form-control" id="gambar" name="gambar">
              </div>
              <div class="form-group">
                <label for="sinopsis">Sinopsis Buku</label>
                <textarea class="form-control" id="sinopsis" rows="5" name="sinopsis"></textarea>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="submit">Tambah Data Buku</button>
              </div>
            </form>
            <!-- ENDFORM -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal Input-->


    <!-- Modal Tabel Buku Anak-->
    <!-- Modal Tabel Buku Anak-->
    <!-- Modal Tabel Buku Anak-->
    <div class="modal fade" id="data_buku_anak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Data Buku Anak</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table table-striped">
              <thead class="bg-warning">
                <tr>
                  <th scope="col" class="text-center">No</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Judul Buku</th>
                  <th scope="col">Penulis</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Pilihan</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data['buku_anak'] as $b_anak) : ?>
                  <tr>
                    <td class="text-center"><?= $i; ?></td>
                    <td><img src="<?= 'assets/img/' . $b_anak['gambar']; ?>" alt="" style="width: 60px; height:30px;"></td>
                    <td><?= $b_anak['judul']; ?></td>
                    <td><?= $b_anak['penulis']; ?></td>
                    <td><?= $b_anak['harga']; ?></td>
                    <td>
                      <a href="<?= BASEURL; ?>/admin/update/<?= $b_anak['slug']; ?>"><span class="badge badge-primary">Update</span></a>
                      |
                      <a href="<?= BASEURL; ?>/delete/delete_BukuAnak/<?= $b_anak['slug']; ?>" onclick="return confirm('Yakin ingin menghapus data buku <?= $b_anak['judul']; ?>')"><span class="badge badge-danger">Delete</span></a>
                    </td>
                  </tr>
                  <?php $i++; ?>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>





  </div>
  <!-- /.row -->
</div>
<!-- /.col-lg-9 -->