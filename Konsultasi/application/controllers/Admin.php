<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct()
	{
		parent::__construct();
        $this->load->model('auth');
        $this->load->model('Member_model');
        $this->load->model('Psychologist_model');
        $this->load->model('Keuangan_model');
        $this->load->model('News_model');
	}
 
    public function index()
    {
        $data['countMbr'] = $this->Member_model->countMember();
        $data['countPsy'] = $this->Psychologist_model->countPsychologist();
        $data['sumKeu'] = $this->Keuangan_model->sumKeuangan();
        $data['countNews'] = $this->News_model->countNews();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) -> row_array();
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('admin/dashboard/index',$data);
        $this->load->view('templates/footer');
    }
 
}
