<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {
	function __construct()
	{
		parent::__construct();
        $this->load->model('auth');
        $this->load->model('news_model');
        $this->load->helper(array('form', 'url'));
	}
 
	public function index()
	{
        $data['nav'] = $this->db->get('psychologist');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();
		$this->load->view('masuk/home', $data);
	}
	public function berita()
	{
        $data['nav'] = $this->db->get('news')->result();
		$data['user2'] = $this->db->get('berita_baru')->result();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();
		$this->load->view('masuk/berita', $data);
    }
    public function berita_detail($id)
	{
        
        $data['nav'] = $this->news_model->berita_baru();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();
		$this->load->view('masuk/berita_detail', $data);
    }
    public function berita_detail2($id)
	{
        $data['nav'] = $this->db->get_where('news', ['id' => $id])->row();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();
		$this->load->view('masuk/berita_detail', $data);
	}
	public function jadwal()
	{
        $data['nav'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();
        $data['user'] = $this->auth->tampil_data()->result();
		$this->load->view('masuk/jadwal', $data);
    }
    public function cari()
	{
        $keyword = $this->input->post('keyword');
        $data['dokter'] = $this->db->get_where('psychologist', ['fullname' => $keyword])->result();
        $data['nav'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();
        $this->load->view('masuk/dokter', $data);
	}
	public function tentang()
	{
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();
		$this->load->view('masuk/tentang', $data);
    }
    public function profile()
    {
        $data['nav'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();
        $id = $this->db->get_where('pasien', ['email' => $this->session->userdata('email')])->row();
        
        $data['user'] = $this->auth->tampil_data()->result();
        $this->load->view('masuk/profile', $data);
    }
    public function edit()
    {
        $data['nav'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();
        $data['user'] = $this->auth->tampil_data()->result();
        $this->load->view('masuk/form_edit', $data);
    }
    public function form()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();
        $this->load->view('masuk/daftar_dokter', $data);
    }
    public function dokter()
	{
        $data['nav'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();
        $data['dokter'] = $this->auth->tampil_data2()->result();
		$this->load->view('masuk/dokter', $data);
    }
    public function dokter1()
    {
        $data['nav'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();
        $data['dokter'] = $this->auth->tampil_data2()->result();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sudah Berhasil Mendaftar</div>');
        $this->load->view('masuk/dokter', $data);
    }

    public function dokter2()
    {
        $data['nav'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();
        $data['dokter'] = $this->auth->tampil_data2()->result();
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Sudah Melebihi Jumlah Maksimal Pasien</div>');
        $this->load->view('masuk/dokter', $data);
    }
    public function tambah_dokter()
    {
        $nama = $this->input->post('nama');
        $tempat = $this->input->post('tempat');
        $tanggal = $this->input->post('tanggal');
        $alamat = $this->input->post('alamat');
        $jam = $this->input->post('jam');
        $libur = $this->input->post('libur');
        
        $bagian = array(
            'nama' => $nama,
            'tempat' => $tempat,
            'tanggal' => $tanggal,
            'alamat' => $alamat,
            'jam' => $jam,
            'libur' => $libur
        );
        $this->auth->tambah_data($bagian, 'dokter');
        $data['nav'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();
        $data['dokter'] = $this->auth->tampil_dokter()->result();
		$this->load->view('masuk/dokter', $data);
    }
    public function update()
    {
        $id = $this->input->post('id');
        $jk = $this->input->post('jk');
        $telepon = $this->input->post('telpon');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
		$password = $this->input->post('password');
        $provinsi = $this->input->post('alamat');
        $foto = $_FILES['foto']['name'];
            if ($foto != '') {
                $config['upload_path'] = './assets/img';
                $config['allowed_types'] = 'jpg|png';
                $config['max_filename']     = '30';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    echo "Upload Gagal";
                    die();
                } else {
                    $foto = $this->upload->data('file_name');
                }
            } else {
                if ($this->input->post('old') != '') {
                    
                    $foto = !empty($this->session->userdata('foto')) ? $this->session->userdata('foto') : 'kosong.png';
                }
                else {
                    $foto = $this->input->post('old');
                }
            }
        $bagian = array(
            'nama' => $nama,
            'telepon' => $telepon,
            'jk' => $jk,
            'email' => $email,
            'password' => password_hash($password,PASSWORD_DEFAULT),
            'provinsi' => $provinsi,
            'foto' => $foto
        );
        $where = array(
            'id' => $id
        );
        $this->auth->update_data($where, $bagian, 'user');
        $data['nav'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();
        $data['user'] = $this->auth->tampil_data()->result();
        $this->load->view('masuk/profile', $data);
        
        
    }
}