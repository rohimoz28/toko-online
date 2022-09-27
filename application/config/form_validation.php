<?php

$config = array(
  'signin' => array(
    array(
      'field' => 'username',
      'label' => 'Username',
      'rules' => 'required',
      'errors' => array(
        'required' => 'username harus diisi'
      )
    ),
    array(
      'field' => 'password',
      'label' => 'Password',
      'rules' => 'required',
      'errors' => array(
        'required' => 'password harus diisi'
      )
    )
  ),
  'signup' => array(
    array(
      'field' => 'username',
      'label' => 'Username',
      'rules' => 'required',
      'errors' => array(
        'required' => 'username harus diisi'
      )
    ),
    array(
      'field' => 'password',
      'label' => 'Password',
      'rules' => 'required',
      'errors' => array(
        'required' => 'password harus diisi'
      )
    ),
    array(
      'field' => 'password_confirmation',
      'label' => 'Password Confirmation',
      'rules' => 'matches[password]',
      'errors' => array(
        'matches' => 'password tidak sesuai'
      )
    )
  )
);
