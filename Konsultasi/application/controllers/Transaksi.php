<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}
 
	public function index()
	{
		$this->load->view('home');
	}
 
	public function tambah($id)
	{
		$data['dokter'] = $this->db->get_where('psychologist', ['id' => $id])->row();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();
        $this->load->view('Masuk/daftar_pasien', $data);
	}
	public function proses($id)
	{
		$awal = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();
        $nama = $awal->nama;
        $email = $awal->email;
        $satu = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row();
        $id_baru = $satu->id;
        $uang1 = $this->db->get_where('psychologist', ['id' => $id])->row();
        $harga = $uang1->price;
		$data = array(
            'id' => $id,
            'nama' => $nama,
            'email' => $email,
		);
		$uang = array(
			'id_pasien' => $id_baru,
			'id_dokter' => $id,
			'harga' => $harga
		);
		$hasil = $this->auth->hitung($id);
		$dokter = $this->db->get_where('psychologist', ['id' => $id])->row();
		$periksa = $this->db->get_where('pasien', ['email' => $email])->row();
		if($hasil->total == $dokter->jumlah) {
			$data['nav'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();
	        $data['dokter'] = $this->auth->tampil_data2()->result();
	        redirect('masuk/dokter2');
		}
		else if(!empty($periksa)) {
			$data['nav'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();
	        $data['dokter'] = $this->auth->tampil_data2()->result();
	        redirect('masuk/dokter2');
		}
		else {
			$this->auth->tambah_transaksi('pasien', $data);
			$this->auth->tambah_transaksi2('keuangan', $uang);
			$bagian['nav'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();
	        $bagian['dokter'] = $this->auth->tampil_data2()->result();
			redirect('masuk/dokter1');
			
		}
		
	}
}
