<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Awal extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
		$this->load->model('news_model');
	}
 
	public function index()
	{
		$data['user'] = $this->db->get('psychologist');
		$this->load->view('home', $data);
	}
	public function berita()
	{
		$data['nav'] = $this->db->get('news')->result();
		$data['user2'] = $this->db->get('berita_baru')->result();
		$this->load->view('berita', $data);
	}
	public function berita_detail($id)
	{
        $data['nav'] = $this->news_model->berita_baru();
		$this->load->view('berita_detail', $data);
    }
    public function berita_detail2($id)
	{
        $data['nav'] = $this->db->get_where('news', ['id' => $id])->row();
		$this->load->view('berita_detail', $data);
	}
	public function cari()
	{
        $keyword = $this->input->post('keyword');
        $data['dokter'] = $this->db->get_where('psychologist', ['fullname' => $keyword])->result();
        $this->load->view('jadwal', $data);
	}
	public function jadwal()
	{
		$data['dokter'] = $this->auth->tampil_data2()->result();
		$this->load->view('jadwal', $data);
	}
	public function tentang()
	{
		$this->load->view('tentang');
	}
}