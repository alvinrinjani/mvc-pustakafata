<?php

function cek_KategoriBuku()
{
  if (isset($_POST['submit']) && empty($_POST['radios'])) {
    echo 'masukkan pilihan kategori';
    return false;
  } elseif (isset($_POST['submit']) && $_POST['radios'] == 'buku_pemikiran') {
    echo 'ini buku pemikiran';
  } elseif (isset($_POST['submit']) && $_POST['radios'] == 'buku_umum') {
    echo 'ini buku umum';
  } elseif (isset($_POST['submit']) && $_POST['radios'] == 'buku_anak') {
    echo 'ini buku anak';
  }
}




if (isset($_POST['submit']) && isset($_POST['radios']) == 'buku_anak') {
  $judul = slug($_POST['judul']);
  $kategori = $_POST['radios'];
  echo 'judul buku ' . $judul . ' kategori : ' . $kategori;
}
