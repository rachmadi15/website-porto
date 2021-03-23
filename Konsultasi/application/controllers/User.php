<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}
 
	public function index()
	{

		$this->load->view('daftar');
	}
 
	public function proses()
	{
        $this->form_validation->set_rules('nama', 'nama','trim|required|alpha|min_length[1]|max_length[255]|is_unique[user.nama]');
        $this->form_validation->set_rules('email', 'email','trim|required|min_length[1]|max_length[255]|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('provinsi', 'provinsi','trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('kota', 'kota','trim|required|min_length[1]|max_length[255]');

        
		if ($this->form_validation->run()==true)
	   	{
            $nama = $this->input->post('nama');
            $email = $this->input->post('email',true);
			$password = $this->input->post('password');
            $provinsi = $this->input->post('provinsi');
			$kota = $this->input->post('kota');
			$foto = 'default.png';
			$token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => date('Y-m-d')
            ];

			$this->auth->register($nama,$email,$password,$provinsi,$kota,$foto);
			$this->auth->register4($user_token);
			$this->auth->register3($nama,$password,$email);

			$this->_sendEmail($token, 'verify');
			
			
			redirect('welcome');
		}
		else
		{
            $nama = $this->input->post('nama');
            $email = $this->input->post('email',true);
            $provinsi = $this->input->post('provinsi');
            $kota = $this->input->post('kota');
            $ada = $this->db->get_where('user', ['nama' => $nama])->row();
            $ada2 = $this->db->get_where('user', ['email' => $email])->row();


			if(!preg_match("/^[a-zA-Z]*$/", $nama))
        	{
        		$this->session->set_flashdata('nama', '<div class="alert alert-danger" role="alert">tanpa angka</div>');
        	}
            else if(empty($nama)) {
                $this->session->set_flashdata('nama', '<div class="alert alert-danger" role="alert">minimal 4 huruf</div>');
            }
            else if(!empty($ada))
            {
                $this->session->set_flashdata('nama', '<div class="alert alert-danger" role="alert">Ada kesamaan</div>');
            }
            if(empty($email))
            {
                $this->session->set_flashdata('email', '<div class="alert alert-danger" role="alert">harus diisi</div>');
            }
            else if(!empty($ada2))
            {
                $this->session->set_flashdata('email', '<div class="alert alert-danger" role="alert">email telah digunakan</div>');
            }
            if(empty($provinsi))
            {
                $this->session->set_flashdata('alamat', '<div class="alert alert-danger" role="alert">Kota dan Provinsi harus diisi</div>');
            }
            else if(empty($kota))
            {
                $this->session->set_flashdata('alamat', '<div class="alert alert-danger" role="alert">Kota dan Provinsi harus diisi</div>');
            }
			redirect('user');
		}
	}

	private function _sendEmail($token, $type)
    {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'sobatku.id23@gmail.com',
            'smtp_pass' => 'sobatku12345',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];
        $this->load->library('email');
        $this->email->initialize($config);
        $this->email->from('sobatku.id23@gmail.com', 'antum antam');
        $this->email->to($this->input->post('email'));
        if ($type == 'verify') {
            $this->email->subject('Account Verification');
            $this->email->message('Klik link ini untuk menverifikasi akun anda : <a href = "' . base_url() . 'user/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">KLIK DISINI</a>');
        } else if ($type == 'lupa_password') {
            $this->email->subject('RESET PASSWORD');
            $this->email->message('Klik link ini untuk reset password anda : <a href = "' . base_url() . 'user/reset_password?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">KLIK DISINI</a>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

	public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
            if ($user_token) {
                $this->db->set('is_active', '1');
                $this->db->where('email', $email);
                $this->db->update('user');

                $this->db->delete('user_token', ['email' => $email]);

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun Berhasil di Verifikasi</div>');
                redirect('welcome');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Verifikasi gagal! Token Salah</div>');
                redirect('welcome');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Verifikasi gagal! Email Tidak Terdaftar</div>');
            redirect('welcome');
        }
    }
}
