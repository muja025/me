<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('PostM','Mdata'));
	}

	public function home()
	{	
		$this->load->database();

	    $jumlahdata = $this->PostM->jumlah_data();

	    $this->load->library('pagination');

	    $config['base_url'] 	= base_url().'welcome/home/';
	    $config['total_rows'] 	= $jumlahdata;
	    $config['per_page'] 	= 5;
		
		$from = $this->uri->segment(3);

	    $this->pagination->initialize($config);

	    $data['news'] = $this->PostM->data($config['per_page'],$from);
		
		$data['judul'] = 'Ilham Bintang';
		$data['img'] = 'home-bg.jpg';		
		$data['sub'] ='Extrovert yang terjebak di kawah teknik';
		
		$this->load->view('layout/head');
		$this->load->view('layout/header', $data);
		$this->load->view('blog/index', $data);
		$this->load->view('layout/footer');
		$this->load->view('layout/foot');
	}

	public function about()
	{
		$data['judul'] = 'About Me';
		$data['img'] = 'about-bg.jpg';
		$data['sub'] ='Extrovert yang terjebak di kawah teknik';

		$this->load->view('layout/head');
		$this->load->view('layout/header', $data);
		$this->load->view('blog/about');
		$this->load->view('layout/footer');
		$this->load->view('layout/foot');
	}

	public function contact()
	{
		$data['judul'] = 'Contact Me';
		$data['img'] = 'header-bg.jpg';
		$data['sub'] ='Extrovert yang terjebak di kawah teknik';

		$this->load->view('layout/head');
		$this->load->view('layout/header',$data);
		$this->load->view('blog/contact');
		$this->load->view('layout/footer');
		$this->load->view('layout/foot');
	}

	public function post($id)
	{
		$where 		= array('id_post' => $id);

		$judul 		= $this->PostM->getPostTertentu($where,'judul');
		$isi 		= $this->PostM->getPostTertentu($where,'isi');
		$tanggal 	= $this->PostM->getPostTertentu($where,'tanggal');

		$komentar 	= $this->PostM->getKomentar($where,'id_post')->result();

		
		$data['judul'] 		= $judul;
		$data['isi'] 		= $isi;
		$data['tanggal'] 	= $tanggal;
	
		$data['img'] 		= 'header-bg.jpg';
		$data['sub'] 		='';
		$data['id']  		= $id;

		$data['komentar'] = $komentar;

		$this->load->view('layout/head');
		$this->load->view('layout/header',$data);
		$this->load->view('blog/post',$data);
		$this->load->view('layout/footer');
		$this->load->view('layout/foot');
	}

	public function pesan()
	{
		$nama  = $this->input->post('nama');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$pesan = $this->input->post('pesan');

		$data = array(
	  		'nama' => $nama,
	  		'email' => $email,
	  		'no_hp' => $no_hp,
	  		'pesan' => $pesan	  		
  		);

    	$this->Mdata->input_data($data,'pesan');
    	redirect(base_url());
	}

	public function komentar()
	{
		$nama  = $this->input->post('nama');
		$komentar = $this->input->post('komentar');
		$id_post = $this->input->post('id_post');

		$data = array(
	  		'nama' => $nama,
	  		'komentar' => $komentar,
	  		'id_post' => (int)$id_post
  		);

    	$this->Mdata->input_data($data,'komentar');

    	redirect(base_url().'post/'.$id_post);
	}
}