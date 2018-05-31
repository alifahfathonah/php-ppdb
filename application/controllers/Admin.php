<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('db_seting');
    $this->load->model('edit_m');
    $this->load->model('db_crud_m');

  }

  private function __cegah()
  {
    if($this->session->userdata('level')!=99)
    {
      $this->session->sess_destroy();
      redirect(base_url());
    }
  }

 
   function index(){
    $this->__cegah();

    $id = $this->session->userdata('id');
    $data['data'] = $this->edit_m->getme($id);
    $this->load->view('admin/index',$data);
  }


  function datasiswa(){
    $this->__cegah();
    $id = $this->session->userdata('id');
    $data['data'] = $this->edit_m->getme($id);
      $data['data'] = $this->db_crud_m->ambil_tabel()->result();
    $this->load->view('admin/data_siswa', $data);
}

  function lihat($id){
    $this->__cegah();
        $edit['tampil'] = $this->db_crud_m->dapatedit($id);
        $user['data'] = $this->edit_m->getme($id);
        $this->load->view('admin/lihat', $edit);
        
  }

  function edit($id){
    $this->__cegah();
    if (@$_POST['submit22']) {
      $data = array(
        'status'=> $this->input->post('status'),
      );
      $edits = $this->db_crud_m->edit($id ,$data); // simpan data / tambah data // "db_crud" adalah load database tsb
      if ($edits) { // fungsi
        redirect(base_url('index.php/admin/datasiswa'),'refresh'); // auto reload ke halaman utama
      }

    }else {

        $edit['tampil'] = $this->db_crud_m->dapatedit($id);
        $this->load->view('admin/edit', $edit);
  }
}


  function hapus($id){
  $hapus = $this->db_crud_m->gethapus($id);
  if ($hapus) {
    redirect(base_url('index.php/admin/datasiswa'),'refresh');
  }else {
    echo "Gagal Hapus";
  }
}




  //prodi all data
      function prodi(){
        $this->__cegah();

        if (@$_POST['submitprodi']) {
              $data = array(
                'nama'=> $this->input->post('nama'),
              );
              $simpan = $this->db_crud_m->tambahprodi($data);
              if ($simpan) { // fungsi
                redirect(base_url('index.php/admin/prodi'),'refresh'); // auto reload ke halaman utama
              }

            }else {

              $data['data'] = $this->db_crud_m->ambil_tabel_prodi()->result();
              $this->load->view('admin/prodi', $data);//
            }
            }

      function delete($id){
      $hapus = $this->db_seting->delete($id);
      if ($hapus) {
        redirect(base_url('index.php/admin/prodi'),'refresh');
      }else {
        echo "Gagal Hapus";
      }
    }






            //agama all data
                function agama(){
                  $this->__cegah();

                  if (@$_POST['submitagama']) {
                        $data = array(
                          'nama'=> $this->input->post('nama'),
                        );
                        $simpan = $this->db_crud_m->tambahagama($data);
                        if ($simpan) { // fungsi
                          redirect(base_url('index.php/admin/agama'),'refresh'); // auto reload ke halaman utama
                        }

                      }else {

                        $data['data'] = $this->db_crud_m->ambil_tabel_agama()->result();
                        $this->load->view('admin/agama', $data);
                      }
                      }


                      function delete1($id){
                      $hapus = $this->db_seting->delete1($id);
                      if ($hapus) {
                        redirect(base_url('index.php/admin/agama'),'refresh');
                      }else {
                        echo "Gagal Hapus";
                      }
                    }



                      //status all data
                          function status(){
                            $this->__cegah();

                            if (@$_POST['submitstatus']) {
                                  $data = array(
                                    'nama'=> $this->input->post('nama'),
                                  );
                                  $simpan = $this->db_crud_m->tambahstatus($data);
                                  if ($simpan) { // fungsi
                                    redirect(base_url('index.php/admin/status'),'refresh'); // auto reload ke halaman utama
                                  }

                                }else {

                                  $data['data'] = $this->db_crud_m->ambil_tabel_status()->result();
                                  $this->load->view('admin/status', $data);
                                }
                                }

                                function delete2($id){
                                $hapus = $this->db_seting->delete2($id);
                                if ($hapus) {
                                  redirect(base_url('index.php/admin/status'),'refresh');
                                }else {
                                  echo "Gagal Hapus";
                                }
                              }


//stting akun
 function setting(){
  $this->__cegah();

    $id = $this->session->userdata('id');
    $data['data'] = $this->edit_m->getme($id);
    $this->load->view('admin/setting', $data);
    if (@$_POST['simpan3']) {
    $data = array(
    'username' => $this->input->post('username'),
    'email' => $this->input->post('email'),
    'password' => md5($this->input->post('password')),

    );
    $simpan = $this->edit_m->ubah($id,$data);
    if ($simpan) {
    echo '<script>alert("Berhasil Di Ubah")</script>';
    redirect(base_url('index.php/admin/setting'),'refresh');
  }
}
}


// halaman config website
function config(){
  $this->__cegah();

  $data['data'] = $this->db_crud_m->ambil_tabel_config()->result();
  $this->load->view('admin/config', $data);
}


function config_edit($id){
    $this->__cegah();
  if (@$_POST['submit00']) {
      $data = array(
        'judul'=> $this->input->post('judul'),
        'text_home'=> $this->input->post('text_home'),
        'text_pengumuman'=> $this->input->post('text_pengumuman'),
        'about'=> $this->input->post('about'),
        'informasi'=> $this->input->post('informasi'),
        'alamat'=> $this->input->post('alamat'),
        'pemilik'=> $this->input->post('pemilik'),
      );
      $editss = $this->db_crud_m->editc($id ,$data);
      if ($editss) {
        redirect(base_url('index.php/admin/config'),'refresh');
      }

    }else {
      $edit['data'] = $this->db_crud_m->geteditc($id);
      $this->load->view('admin/config_edit', $edit);
    }
}












  function logout(){
    $this->load->view('admin/logout.php');
  }


}?>
