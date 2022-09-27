<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function fashion()
    {
        $data['fashion'] = $this->M_kategori->fashion();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/fashion', $data);
        $this->load->view('templates/footer');
    }
    public function buku()
    {
        $data['buku'] = $this->M_kategori->buku();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/buku', $data);
        $this->load->view('templates/footer');
    }
    public function komputer()
    {
        $data['komputer'] = $this->M_kategori->komputer();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/komputer', $data);
        $this->load->view('templates/footer');
    }
    public function olahraga()
    {
        $data['olahraga'] = $this->M_kategori->olahraga();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/olahraga', $data);
        $this->load->view('templates/footer');
    }
}
