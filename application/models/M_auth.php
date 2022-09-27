<?php

class M_auth extends CI_Model
{
  public function cek_login(): object
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $get_username = $this->db->get_where('tb_user', array('username' => $username))->first_row();
    $password_verify = password_verify($password, $get_username->password);

    if (!$get_username || !$password_verify) {
      return new stdClass();
    }

    return $get_username;
  }

  public function registrasi(): bool
  {
    $name = $this->input->post('name');
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $options = array(
      'cost' => 12
    );

    $data = array(
      'nama' => $name,
      'username' => $username,
      'password' => password_hash($password, PASSWORD_BCRYPT, $options),
    );

    $this->db->insert('tb_user', $data);

    return ($this->db->affected_rows() != 1) ? false : true;
  }
}
