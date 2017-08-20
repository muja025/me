<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class PostM extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function getPost($tabel)
        {
                return $this->db->get($tabel);               
        }

        public function getPostTertentu($where,$kolom)
        {
                $q= $this->db->get_where('post',$where,0,1)->row();               
                return $q->$kolom;
        }

        public function getKomentar($where,$kolom)
        {
                return $this->db->get_where('komentar', $where);               
        }

        public function jumlah_data()
        {
                return $this->db->get('post')->num_rows();
        }

        public function data($limit, $offset)
        {
                return $query = $this->db->get('post', $limit, $offset)->result();
        }
       
}