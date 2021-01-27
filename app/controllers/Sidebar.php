<?php

class Sidebar extends Controller
{
  public function index()
  {
    $data['title'] = 'Home';
    $data['buku_anak'] = $this->model('Model_Buku_Anak')->bukuAnak();
    $data['buku_pemikiran'] = $this->model('Model_Buku_Pemikiran')->bukuPemikiran();
    $data['buku_umum'] = $this->model('Model_Buku_Umum')->bukuUmum();

    $this->view('templates/sidebar-header', $data);
    $this->view('templates/sidebar-nav');
    $this->view('templates/sidebar-content', $data);
    $this->view('templates/sidebar-footer');
  }
}
