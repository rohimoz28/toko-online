<?php

class M_kategori extends CI_Model
{

    public function olahraga()
    {
        return $this->db->get_where('tb_barang', ['kategori' => 'Olahraga'])->result();
    }

    public function buku()
    {
        return $this->db->get_where('tb_barang', ['kategori' => 'Buku'])->result();
    }

    public function komputer()
    {
        return $this->db->get_where('tb_barang', ['kategori' => 'Komputer'])->result();
    }

    public function fashion()
    {
        return $this->db->get_where('tb_barang', ['kategori' => 'Fashion'])->result();
    }
}
