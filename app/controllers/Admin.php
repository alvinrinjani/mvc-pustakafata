<?php

class Admin extends Controller
{
  public function index()
  {
    $data['title'] = 'Admin';
    $data['buku_anak'] = $this->model('Model_Buku_Anak')->bukuAnak();
    $data['buku_pemikiran'] = $this->model('Model_Buku_Pemikiran')->bukuPemikiran();
    $data['buku_umum'] = $this->model('Model_Buku_Umum')->bukuUmum();

    $this->view('templates/header', $data);
    $this->view('templates/navigation');
    $this->view('templates/category_admin');
    $this->view('admin/modal', $data);
    $this->view('templates/footer');
  }

  public function input_buku()
  {
    if (isset($_POST['submit']) && empty($_POST['radios'])) {
      Flasher::setFlash('gagal', 'buku', 'ditambahkan', 'danger', BASEURL);
      header('Location:' . BASEURL . '/admin');
      exit;
    } elseif (isset($_POST['submit']) && $_POST['radios'] == 'buku_anak') {
      if ($this->model('Model_Buku_Anak')->input_BukuAnak($_POST) > 0) {
        Flasher::setFlash('berhasil', 'buku anak', 'ditambahkan', 'success', BASEURL . '#buku_anak');
        header('Location:' . BASEURL . '/admin');
        exit;
      }
    } elseif (isset($_POST['submit']) && $_POST['radios'] == 'buku_pemikiran') {
      if ($this->model('Model_Buku_Pemikiran')->input_BukuPemikiran($_POST) > 0) {
        Flasher::setFlash('berhasil', 'buku pemikiran', 'ditambahkan', 'success', BASEURL . '#buku_pemikiran');
        header('Location:' . BASEURL . '/admin');
        exit;
      }
    } elseif (isset($_POST['submit']) && $_POST['radios'] == 'buku_umum') {
      if ($this->model('Model_Buku_Umum')->input_BukuUmum($_POST) > 0) {
        Flasher::setFlash('berhasil', 'buku umum', 'ditambahkan', 'success', BASEURL . '#buku_umum');
        header('Location:' . BASEURL . '/admin');
        exit;
      }
    }
  }
}
