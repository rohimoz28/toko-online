<?php

class M_barang extends CI_Model
{

  public function tampil_data()
  {
    return $this->db->get('tb_barang');
  }

  public function cari_data($pencarian)
  {
    if (!$pencarian) {
      return null;
    }

    $this->db->like('nama_brg', $pencarian);
    $this->db->like('keterangan', $pencarian);
    $query = $this->db->get('tb_barang');
    return $query->result();
  }

  public function tambah_barang($data, $table)
  {
    $this->db->insert($table, $data);
  }

  public function edit_barang($where, $table)
  {
    return $this->db->get_where($table, $where);
  }

  public function update_barang($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  public function hapus_barang($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }

  public function find($id)
  {
    $result = $this->db->where('id_brg', $id)
      ->limit(1)
      ->get('tb_barang');

    if ($result->num_rows() > 0) {
      return $result->row();
    } else {
      return array();
    }
  }

  public function detailBarang($id_barang)
  {
    return $this->db->where('id_brg', $id_barang)->get('tb_barang')->result();
  }
}
