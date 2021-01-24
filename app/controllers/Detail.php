<?php

class Detail extends Controller
{

  public function index()
  {
    $this->view('404/index');
  }

  public function bukuAnak($slug)
  {
    $data['title'] = 'Detail Buku';
    $data['detail_BukuAnak'] = $this->model('Model_Buku_Anak')->detail_BukuAnak($slug);

    $this->view('templates/header', $data);
    $this->view('templates/navigation');
    $this->view('templates/category');
    $this->view('detail/detail_BukuAnak', $data);
    $this->view('templates/footer');
  }

  public function bukuPemikiran($slug)
  {
    $data['title'] = 'Detail Buku';
    $data['detail_BukuPemikiran'] = $this->model('Model_Buku_Pemikiran')->detail_BukuPemikiran($slug);

    $this->view('templates/header', $data);
    $this->view('templates/navigation');
    $this->view('templates/category');
    $this->view('detail/detail_BukuPemikiran', $data);
    $this->view('templates/footer');
  }

  public function bukuUmum($slug)
  {
    $data['title'] = 'Detail Buku';
    $data['detail_BukuUmum'] = $this->model('Model_Buku_Umum')->detail_BukuUmum($slug);

    $this->view('templates/header', $data);
    $this->view('templates/navigation');
    $this->view('templates/category');
    $this->view('detail/detail_BukuUmum', $data);
    $this->view('templates/footer');
  }
}
