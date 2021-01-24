<?php

class Delete extends Controller
{
  public function index()
  {
    $this->view('404/index');
  }

  public function delete_BukuAnak($slug)
  {
    if ($this->model('Model_Buku_Anak')->delete_BukuAnak($slug) > 0) {
      Flasher::setFlash('berhasil', 'buku anak', 'dihapus', 'success', BASEURL);
      header('Location:' . BASEURL . '/admin');
      exit;
    }
  }

  public function delete_BukuPemikiran($slug)
  {
    if ($this->model('Model_Buku_Pemikiran')->delete_BukuPemikiran($slug) > 0) {
      Flasher::setFlash('berhasil', 'buku pemikiran', 'dihapus', 'success', BASEURL);
      header('Location:' . BASEURL . '/admin');
      exit;
    }
  }

  public function delete_BukuUmum($slug)
  {
    if ($this->model('Model_Buku_Umum')->delete_BukuUmum($slug) > 0) {
      Flasher::setFlash('berhasil', 'buku umum', 'dihapus', 'success', BASEURL);
      header('Location:' . BASEURL . '/admin');
      exit;
    }
  }
}
