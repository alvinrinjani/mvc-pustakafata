<?php

class Model_Buku_Umum
{
  private $table_buku_umum = 'buku_umum';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function bukuUmum()
  {
    $this->db->query('SELECT * FROM ' . $this->table_buku_umum . ' ORDER BY id DESC');
    return $this->db->resultSet();
  }

  public function detail_BukuUmum($slug)
  {
    $this->db->query('SELECT * FROM ' . $this->table_buku_umum . ' WHERE slug=:slug');
    $this->db->bind('slug', $slug);
    return $this->db->single();
  }

  public function input_BukuUmum($data)
  {
    $judul = $data['judul'];
    $slug = slug($data['judul']);
    $penulis = $data['penulis'];
    $penerbit = $data['penerbit'];
    $tahun = $data['tahun'];
    $harga = $data['harga'];
    $gambar = $data['gambar'];
    $sinopsis = $data['sinopsis'];

    $query = "INSERT INTO buku_umum
              VALUES
              ('', :judul, :slug, :penulis, :penerbit, :tahun, :harga, :gambar, :sinopsis)";

    $this->db->query($query);
    $this->db->bind('judul', $judul);
    $this->db->bind('slug', $slug);
    $this->db->bind('penulis', $penulis);
    $this->db->bind('penerbit', $penerbit);
    $this->db->bind('tahun', $tahun);
    $this->db->bind('harga', $harga);
    $this->db->bind('gambar', $gambar);
    $this->db->bind('sinopsis', $sinopsis);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
