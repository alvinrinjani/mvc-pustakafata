<?php

class Home extends Controller
{
  public function index()
  {
    $data['title'] = 'Home';
    $data['buku_anak'] = $this->model('Model_Buku_Anak')->bukuAnak();
    $data['buku_pemikiran'] = $this->model('Model_Buku_Pemikiran')->bukuPemikiran();
    $data['buku_umum'] = $this->model('Model_Buku_Umum')->bukuUmum();

    $this->view('templates/header', $data);
    $this->view('templates/navigation_home');
    $this->view('templates/category_home');
    $this->view('home/index', $data);
    $this->view('templates/footer');
  }
}
