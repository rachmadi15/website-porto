<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}
 
	public function index()
	{
		$this->load->view('login');
	}
 
	public function proses()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$user = $this->db->get_where('user',['email' => $email]) -> row_array();
		if($this->auth->login_user($email,$password) and $user['is_active'] == '1')
		{
			if($user['role'] == 'member')
			{
				redirect('masuk');
			}
			else if($user['role'] == 'admin')
			{
				redirect('admin');
			}
			else {
				redirect('psikiater');
			}
		}
		else
		{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email atau Password Salah</div>');
			redirect('welcome');
		}
		
	}
 
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('awal');
	}
}
