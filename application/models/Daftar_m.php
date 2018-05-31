<?php
class Daftar_m extends CI_Model{

  function simpan($data)
  {
  return $this->db->insert('daftar',$data); // simpan data
  }


}
