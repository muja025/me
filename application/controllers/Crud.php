<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mdata');

    if ($this->session->userdata('status') !='login')
    {
      redirect(base_url('login'));
    }
  }

  public function index()
  {
    $this->load->view('admin/head');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/index');
    $this->load->view('admin/foot');
  }

  public function messages()
  {
    $q ['data']= $this->Mdata->tampil_data('pesan')->result();

    $this->load->view('admin/head');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/message',$q);
    $this->load->view('admin/foot'); 
  }

  public function post()
  {
    $q ['data']= $this->Mdata->tampil_data('post')->result();

    $this->load->view('admin/head');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/post',$q);
    $this->load->view('admin/foot'); 
  }

  public function komentar()
  {
    $q ['data']= $this->Mdata->tampil_data('komentar')->result();
    

    $this->load->view('admin/head');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/komentar',$q);
    $this->load->view('admin/foot'); 
  }

  public function insert()
  {
    $this->load->view('admin/head');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/insertpost');
    $this->load->view('admin/foot');
  }

  public function insertAction()
  {
    $judul  = $this->input->post('judul');
    $isi    = $this->input->post('isi');

    $data = array
            ('judul' => $judul,
             'isi' => $isi
            );
    $this->Mdata->input_data($data,'post');
    redirect('crud/post');
  }

  public function hapus($id)
  {
    $where = array('id' => $id);
    $this->Mdata->hapus_data($where,'pesan');
    redirect('crud/post');
  }

  public function hapusPost($id)
  {
    $where = array('id_post' => $id);
    $this->Mdata->hapus_data($where,'post');
    redirect('crud/post');
  }

  public function hapusKomentar($id)
  {
    $where = array('id' => $id);
    $this->Mdata->hapus_data($where,'komentar');
    redirect('crud/komentar');
  }

  public function edit($id)
  {
    $where = array('id_post' => $id);
    $data['post'] = $this->Mdata->edit_data($where,'post')->result();    

$this->load->view('admin/head');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/editpost', $data);
    $this->load->view('admin/foot');
  }


  public function update($id)
  {
  	$judul = $this->input->post('judul');
  	$isi = $this->input->post('isi');

  	$data = array(
  		'judul' => $judul,
  		'isi' => $isi
  	);

  	$where = array(
  		'id_post' => $id
  	);

  	$this->Mdata->update_data($where,$data,'post');
  	redirect(base_url().'crud/post');
  }
}