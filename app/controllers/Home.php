<?php

class Home extends Controller
{
  public function index()
  {
    $data['title'] = 'Home';
    $data['buku_anak'] = $this->model('Books_Model')->buku_anak();
    $data['buku_pemikiran'] = $this->model('Books_Model')->buku_pemikiran();
    $data['buku_umum'] = $this->model('Books_Model')->buku_umum();

    $this->view('templates/header', $data);
    $this->view('templates/navigation');
    $this->view('templates/category');
    $this->view('home/index', $data);
    $this->view('templates/footer');
  }
}
