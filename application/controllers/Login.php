<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('Mlogin'));
    $this->load->library('form_validation');
  }

	public function index()
	{
		    $dataerror['error'] = "";
        $dataerror['status'] = false;
        $this->load->view('admin/head');
        $this->load->view('admin/login', $dataerror);
	}

  public function aksiLogin()
  {
    $this->form_validation->set_rules('username','Nama','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run() != false)
    {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      
      $where = array(
                      'username' => $username,
                      'password' => md5($password)
                    );

      $cek = $this->Mlogin->cekLogin($where)->num_rows();
      
      if ($cek>0) //berhasil login
      {
        $data_session = array(
                              'nama' => $username,
                              'status' => 'login'
                              );
        $this->session->set_userdata($data_session);

        redirect(base_url('Crud'));
      }
      else {
        $dataerror['error'] = "username salah";
        $dataerror['status'] = true;
        $this->load->view('admin/head');
        $this->load->view('admin/login', $dataerror);
      }

		}
    else
    {
        $dataerror['error'] = "username atau password tidak boleh kosong";
        $dataerror['status'] = true;
		    $this->load->view('admin/head');
        $this->load->view('admin/login',$dataerror);
		}

  }
  
  public function logout()
  {
    $this->session->sess_destroy();
    redirect(base_url("login"));
  }
}