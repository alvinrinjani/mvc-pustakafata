<?php

class Contact extends Controller
{
  public function index()
  {
    $data['title'] = 'Contact';

    $this->view('templates/header', $data);
    $this->view('templates/navigation');
    $this->view('templates/category');
    $this->view('contact/index');
    $this->view('templates/footer');
  }
}
