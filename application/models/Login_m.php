<?php
class Login_m extends CI_Model{

  function cek_user($username, $password)
  {
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    return $this->db->get('daftar');
  }


}
