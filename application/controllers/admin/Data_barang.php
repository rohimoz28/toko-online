<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '0') {
            $this->session->set_flashdata('pesan', '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <p>Silahkan login terlebih dahulu!</p>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    ');
            redirect('auth/login');
        }
    }
    public function index()
    {
        $data['barang'] = $this->M_barang->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_admin');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_barang()
    {
        $namaBarang = $this->input->post('nama_brg');
        $kategori   = $this->input->post('kategori');
        $stok       = $this->input->post('stok');
        $harga      = $this->input->post('harga');
        $keterangan = $this->input->post('keterangan');
        $gambar     = $_FILES['gambar']['name'];

        if ($gambar) {
            $config['upload_path']          = './uploads';
            $config['allowed_types']        = 'gif|jpg|jpeg|png';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar gagal di upload";
                echo $this->upload->display_errors();
            } else {
                $gambar = $this->upload->data('file_name');

                $data = [
                    'nama_brg' => $namaBarang,
                    'keterangan' => $keterangan,
                    'kategori' => $kategori,
                    'harga' => $harga,
                    'stok' => $stok,
                    'gambar' => $gambar
                ];


                $this->M_barang->tambah_barang($data, 'tb_barang');
                redirect('admin/data_barang');
            }
        }
    }

    public function edit($id)
    {
        $where = ['id_brg' => $id];
        $data['barang'] = $this->M_barang->edit_barang($where, 'tb_barang')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/edit_barang', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id         = $this->input->post('id_brg');
        $nama       = $this->input->post('nama_brg');
        $kategori   = $this->input->post('kategori');
        $stok       = $this->input->post('stok');
        $harga      = $this->input->post('harga');
        $keterangan = $this->input->post('keterangan');

        $data = [
            'id_brg'    => $id,
            'nama_brg'  => $nama,
            'keterangan' => $keterangan,
            'kategori'  => $kategori,
            'harga'     => $harga,
            'stok'      => $stok
        ];

        $where = ['id_brg' => $id];

        $this->M_barang->update_barang($where, $data, 'tb_barang');
        redirect('admin/data_barang/');
    }

    public function hapus($id)
    {
        $where = ['id_brg' => $id];
        $this->M_barang->hapus_barang($where, 'tb_barang');
        redirect('admin/data_barang/');
    }
}
