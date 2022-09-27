<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  // $2y$12$ZLfzRekAauyQgmJjomv.DOtqHpfDswYD3d0FjWCbvJ/oWNJW5Jd2q || rahasia - 12
  public function register()
  {
    if ($this->form_validation->run('signup') == FALSE) {
      $this->load->view('templates/auth_header');
      $this->load->view('auth/form_register');
      $this->load->view('templates/auth_footer');
    } else {

      $register = $this->M_auth->registrasi();

      if (!$register) {
        $this->session->set_flashdata('error', 'Registrasi Gagal. Coba ulangi kembali!');
        redirect('auth/register');
      }

      $this->session->set_flashdata('success', 'Registrasi berhasil. Silahkan login');
      redirect('auth/login');
    }
  }

  public function login()
  {
    if ($this->form_validation->run('signin') == FALSE) {
      $this->load->view('templates/auth_header');
      $this->load->view('auth/form_login');
      $this->load->view('templates/auth_footer');
    } else {

      $auth = $this->M_auth->cek_login();

      if ($auth == new stdClass()) {
        $this->session->set_flashdata('error', 'Username atau password anda salah!');
        redirect('auth/login');
      }

      $this->session->set_userdata('username', $auth->username);
      $this->session->set_userdata('role_id', $auth->role_id);

      switch ($auth->role_id) {
        case 0:
          redirect('admin/dashboard_admin');
          break;
        case 1:
          redirect('welcome');
          break;
        default:
          break;
      }
    }
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('auth/login');
  }
}
