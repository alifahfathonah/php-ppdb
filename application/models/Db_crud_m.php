<?php

class Db_crud_m extends CI_ModeL
{

  function ambil_tabel(){
  return $this->db->get('daftar'); //ambil database
  }

  function edit($id,$data){
    $this->db->where('id', $id);
  return $this->db->update('daftar',$data); // edit data
}

  function dapatedit($id){
    $this->db->where('id', $id);
    return $this->db->get('daftar')->row();
  }

  function gethapus($id){
  $this->db->where('id', $id);
  return $this->db->delete('daftar');
}



  // data prodi
  function tambahprodi($data){
    return $this->db->insert('prodi',$data); // simpan data prodi
  }
  function ambil_tabel_prodi(){
  return $this->db->get('prodi'); //ambil database
  }

  // data agama
  function tambahagama($data){
    return $this->db->insert('agama',$data); // simpan data prodi
  }
  function ambil_tabel_agama(){
  return $this->db->get('agama'); //ambil database
  }

  // data status
  function tambahstatus($data){
    return $this->db->insert('status',$data); // simpan data prodi
  }
  function ambil_tabel_status(){
  return $this->db->get('status'); //ambil database
  }

  //data config
  function ambil_tabel_config(){
  return $this->db->get('config'); //ambil database
  }
  function editc($id,$data){
  $this->db->where('id', $id);
  return $this->db->update('config',$data); // edit data
}

  function geteditc($id){
  $this->db->where('id', $id);
  return $this->db->get('config')->row();
}




}
