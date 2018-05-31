<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('edit_m');

  }

  private function __cegah()
  {
    if($this->session->userdata('level')!=1)
    {
      $this->session->sess_destroy();
      redirect(base_url());
    }
  }


  function index(){
    $this->__cegah();

    $id = $this->session->userdata('id');
    $data['data'] = $this->edit_m->getme($id);
    $this->load->view('member/index', $data);
  }

  function datadiri(){
    $this->__cegah();

    $id = $this->session->userdata('id');
    $data['data'] = $this->edit_m->getme($id);
    $this->load->view('member/data_diri', $data);
    if (@$_POST['simpan']) {
      $data = array(
        'nama' => $this->input->post('nama'),
        'nisn' => $this->input->post('nisn'),
        'tmp_lahir' => $this->input->post('tmp_lahir'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'kelamin' => $this->input->post('kelamin'),
        'nik' => $this->input->post('nik'),
        'agama' => $this->input->post('agama'),
        'alamat' => $this->input->post('alamat'),
        'asal_sekolah' => $this->input->post('asal_sekolah'),

      );
      $simpan = $this->edit_m->ubah($id,$data);
      if ($simpan) {
        echo '<script>alert("Berhasil Di Ubah")</script>';
        redirect(base_url('index.php/member/'),'refresh');
      }
    }
  }

  function prodi(){
    $this->__cegah();

    $id = $this->session->userdata('id');
    $data['data'] = $this->edit_m->getme($id);
    $this->load->view('member/prodi', $data);
    if (@$_POST['simpan1']) {
      $data = array(
        'prodi1' => $this->input->post('prodi1'),
        'prodi2' => $this->input->post('prodi2'),

      );
      $simpan = $this->edit_m->ubah($id,$data);
      if ($simpan) {
        echo '<script>alert("Berhasil Di Ubah")</script>';
        redirect(base_url('index.php/member/'),'refresh');
      }
    }
  }


  function setting(){
    $this->__cegah();

    $id = $this->session->userdata('id');
    $data['data'] = $this->edit_m->getme($id);
    $this->load->view('member/setting', $data);
    if (@$_POST['simpan3']) {
      $data = array(
        'username' => $this->input->post('username'),
        'email' => $this->input->post('email'),
        'password' => md5($this->input->post('password')),

      );
      $simpan = $this->edit_m->ubah($id,$data);
      if ($simpan) {
        echo '<script>alert("Berhasil Di Ubah")</script>';
        redirect(base_url('index.php/member/'),'refresh');
      }
    }
  }

  function nilai(){
    $this->__cegah();

    $id = $this->session->userdata('id');
    $data['data'] = $this->edit_m->getme($id);
    $this->load->view('member/nilai', $data);
    if (@$_POST['simpan2']) {
      $data = array(
        'ipa1' => $this->input->post('ipa1'),
        'mtk1' => $this->input->post('mtk1'),
        'indo1' => $this->input->post('indo1'),
        'bing1' => $this->input->post('bing1'),


      );
      $simpan = $this->edit_m->ubah($id,$data);
      if ($simpan) {
        echo '<script>alert("Berhasil Di Ubah")</script>';
        redirect(base_url('index.php/member/'),'refresh');
      }
    }

  }

  function status(){
    $this->__cegah();

    $id = $this->session->userdata('id');
    $data['data'] = $this->edit_m->getme($id);
    $this->load->view('member/status', $data);
  }


  function logout(){
    $this->load->view('member/logout.php');
  }

}?>
