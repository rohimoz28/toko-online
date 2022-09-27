<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_admin extends CI_Controller
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
        $data['total_barang'] = $this->M_barang->totalBarang();
        $data['total_invoice'] = $this->M_invoice->totalInvoice();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_admin_dashboard');
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
}
