<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('login_m');
    $this->load->model('daftar_m');

  }

	public function index()
	{
		$this->load->view('index');
	}

  function daftar(){
  if (@$_POST['submit']) {
    $data = array(
      'nama'=> $this->input->post('nama'),
      'email'=> $this->input->post('email'),
      'username'=> $this->input->post('username'), // kita ambil artibut dari database
      'password'=> md5($this->input->post('password')),
      'kelamin'=> $this->input->post('kelamin'),
    );
    $this->load->model('daftar_m');
    $simpan = $this->daftar_m->simpan($data);
    if ($simpan) {
      echo '<script>alert("Daftar Berhasil")</script>';
      redirect(base_url('index.php/home/login'),'refresh');

    }

  }else {
    $this->load->view('daftar');
  }
}

public function login()
	{
    if(@$_POST['simpan'])
    {
      $username = $this->input->post('username');
      $password = md5($this->input->post('password'));
      $cek = $this->login_m->cek_user($username, $password);
      if($cek->num_rows()>0)
      {
        $sesi = array(
          'id' => $cek->row()->id,
          'username' => $cek->row()->username,
          'level' => $cek->row()->level,
        );
        $this->session->set_userdata($sesi);
        if($cek->row()->level==99)
        {
          redirect(base_url('index.php/admin'));
        }
        else {
          redirect(base_url('index.php/member'));
        }
      }
      else {
        echo '<script>alert("gagal Login nih")</script>';
        redirect(base_url('index.php/home/login'),'refresh');

      }
    }
    else
    {
      $this->load->view('login');
    }

	}


}
