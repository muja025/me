<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model
{

	// public function __construct()
 //    {
 //        $this->load->database();
 //    }

	public function cekLogin($where)
	{
		return $this->db->get_where('admin', $where);
	}

}
