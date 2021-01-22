<?php

class Input extends Controller
{
  public function index()
  {
    $data['title'] = 'Input';

    $this->view('templates/header', $data);
    $this->view('templates/navigation');
    $this->view('templates/category_input');
    $this->view('input/index');
    $this->view('templates/footer');
  }

  public function input_b_anak()
  {
  }
}
