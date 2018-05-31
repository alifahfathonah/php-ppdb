<?php
class Db_seting extends CI_ModeL
{
  //prodi
  function delete($id){
    $this->db->where('id', $id);
    return $this->db->delete('prodi');
  }

  //agama
  function delete1($id){
    $this->db->where('id', $id);
    return $this->db->delete('agama');
  }

  //status
  function delete2($id){
    $this->db->where('id', $id);
    return $this->db->delete('status');
  }



}
