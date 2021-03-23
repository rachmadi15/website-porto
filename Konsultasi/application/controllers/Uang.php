<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uang extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('manajemen');
	}
 
	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) -> row_array();
        $data['anggota'] = $this->manajemen->data_anggota()->result(); 
   		$data['simpanan'] = $this->manajemen->data_simpanan()->result(); 
   		$data['join_anggota_simpanan'] = $this->manajemen->join2table()->result(); 
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
		$this->load->view('admin/keuangan/index', $data);
		$this->load->view('templates/footer');
	}
 
	
}
