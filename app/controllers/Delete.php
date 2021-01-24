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
}
