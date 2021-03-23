<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Psikiater extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}
 
	public function index()
	{
		$data['user'] = $this->db->get_where('psychologist', ['email' => $this->session->userdata('email')])->row();
        $data['hasil'] = $this->auth->hitung($data['user']->id);
		$this->load->view('psikiater/home', $data);
	}
	public function edit()
	{
        $data['user'] = $this->db->get_where('psychologist', ['email' => $this->session->userdata('email')])->row();
        $data['baru'] = $this->db->get_where('users', ['name' => $data['user']->fullname])->row();
        $data['lama'] = $this->db->get_where('user', ['nama' => $data['user']->fullname])->row();
		$this->load->view('psikiater/edit', $data);
	}
	public function pasien()
	{
		$user = $this->db->get_where('psychologist', ['email' => $this->session->userdata('email')])->row();
		$id = $user->id;
		$data['pasien'] =  $this->db->get_where('pasien', ['id' => $id])->result();
		$this->load->view('psikiater/pasien', $data);
	}
    public function hapus($val)
    {
        $where = array('id_pasien' => $val);

        $this->auth->hapus($where,'pasien');

        redirect('psikiater/pasien');
    }
	public function update()
    {
        $id = $this->input->post('id');
        $id_lain = $this->input->post('id_lain');
        $id_baru = $this->input->post('id_baru');
        $fullname = $this->input->post('fullname');
        $telp= $this->input->post('telp');
        $email = $this->input->post('email');
		$jam = $this->input->post('jam');
        $libur = $this->input->post('libur');
        $price = $this->input->post('price');
        $jumlah = $this->input->post('jumlah');
        $foto = $_FILES['foto']['name'];
            if ($foto != '') {
                $config['upload_path'] = './assets/img/newsimg';
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
            'fullname' => $fullname,
            'telp' => $telp,
            'email' => $email,
            'jam' => $jam,
            'libur' => $libur,
            'price' => $price,
            'jumlah' => $jumlah,
            'foto' => $foto
        );
        $bagian2 = array(
            'name' => $fullname,
            'username' => $fullname
        );
        $bagian3 = array(
            'nama' => $fullname,
            'email' => $email
        );
        $where = array(
            'id' => $id
        );
        $where2 = array(
            'id' => $id_lain
        );
        $where3 = array(
            'id' => $id_baru
        );
        $this->auth->update_data($where, $bagian, 'psychologist');
        $this->auth->update_data($where2, $bagian2, 'users');
        $this->auth->update_data($where3, $bagian3, 'user');
        $data['user'] = $this->db->get_where('psychologist', ['email' => $this->session->userdata('email')])->row();
        $data['hasil'] = $this->auth->hitung($data['user']->id);
		$this->load->view('psikiater/home', $data);
        
    }
}