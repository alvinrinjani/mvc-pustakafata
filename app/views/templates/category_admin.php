<!-- Page Content -->
<div class="container">

  <div class="row">

    <div class="col-lg-3">

      <h1 class="my-4" style="font-family: 'Carter One', cursive;"><?= SHOP; ?></h1>

      <!-- Content Category -->
      <div class="list-group">
        <button type="button" class="btn btn-info shadow mb-2" data-toggle="modal" data-target="#input_buku">Tambah Data Buku</button>
        <button type="button" class="btn btn-secondary shadow mb-2 dropdown-toggle" id="update-delete-dropdown" data-toggle="dropdown"><a href="" style="text-decoration:none;" class="text-white">Update & Delete Data Buku</a></button>
        <div class="dropdown-menu" aria-labelledby="update-delete-dropdown">
          <button type="button" class="btn btn-primary dropdown-item" data-toggle="modal" data-target="#data_buku_anak">Data Buku Anak</button>

        </div>
      </div>
      <!-- End Content Category -->


    </div>
    <!-- /.col-lg-3 -->