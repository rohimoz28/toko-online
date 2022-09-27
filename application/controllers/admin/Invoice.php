<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice extends CI_Controller
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
        // load lib pagination
        $this->load->library('pagination');
        // config
        // config file application/config/pagination.php
        $config['base_url'] = base_url() . 'admin/invoice/index';
        $config['total_rows'] = $this->M_invoice->totalInvoice();
        $config['per_page'] = 5;
        // initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(4);
        $data['invoices'] = $this->M_invoice->data($config['per_page'], $data['start']);

        $this->load->view('templates/header');
        // $this->load->view('templates/sidebar_admin');
        $this->load->view('templates/sidebar_admin_dashboard');
        $this->load->view('admin/invoice', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id_invoice)
    {
        $data['invoice']    = $this->M_invoice->getIdInvoice($id_invoice);
        $data['pesanan']    = $this->M_invoice->getIdPesanan($id_invoice);

        $this->load->view('templates/header');
        // $this->load->view('templates/sidebar_admin');
        $this->load->view('templates/sidebar_admin_dashboard');
        $this->load->view('admin/detail_invoice', $data);
        $this->load->view('templates/footer');
    }
}
