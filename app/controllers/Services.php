<?php

class Services extends Controller
{
  public function index()
  {
    $data['title'] = 'Services';

    $this->view('templates/header', $data);
    $this->view('templates/navigation');
    $this->view('templates/category');
    $this->view('services/index');
    $this->view('templates/footer');
  }
}
