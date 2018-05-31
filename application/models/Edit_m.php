<?php
class Edit_m extends CI_Model{

  public function getme($id){
    $this->db->where('id',$id);
    return $this->db->get('daftar')->row();
  }

  function ubah($id,$data){
  $this->db->where('id', $id);
    return $this->db->update('daftar',$data);
  }

}
