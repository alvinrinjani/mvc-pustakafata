<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Cari buku..." aria-label="Search">
        <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Cari</button>
      </form>
      <ul class="navbar-nav ml-auto acme">
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL; ?>">Beranda
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Kategori Buku
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item js-scroll-trigger" href="#buku_anak">Buku Anak</a>
            <a class="dropdown-item js-scroll-trigger" href="#buku_pemikiran">Buku Pemikiran</a>
            <!-- <div class="dropdown-divider"></div> -->
            <a class="dropdown-item js-scroll-trigger" href="#buku_umum">Buku Umum</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL; ?>/services">Layanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL; ?>/contact">Kontak Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL; ?>/admin">Admin</a>
        </li>
      </ul>
    </div>
  </div>
</nav>