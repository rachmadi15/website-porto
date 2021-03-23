<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Psychologist extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Psychologist_model');
        $this->load->model('auth');
    }

    public function index()
    {
        $recPsychologist = $this->Psychologist_model->getDataPsychologist();
        $data1 = array('data_psy' => $recPsychologist);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) -> row_array();
        
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('admin/psychologist/psychologist',$data1);
        $this->load->view('templates/footer');
    }
    public function daftar()
    {
        
        $this->load->view('admin/psychologist/daftar');    
    }

   public function add()
    {
        $this->form_validation->set_rules('fullname', 'fullname','trim|required|min_length[1]|max_length[255]|is_unique[psychologist.fullname]');
        $this->form_validation->set_rules('email', 'email','trim|required|min_length[1]|max_length[255]|is_unique[psychologist.email]');
        $this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('telp', 'telp','trim|required|min_length[4]|max_length[255]');
        if ($this->form_validation->run()==true)
        {
            $fullname = $this->input->post('fullname');
            $address = $this->input->post('address');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $telp = $this->input->post('telp');
            $gender = $this->input->post('gender');
            $jam = $this->input->post('jam');
            $libur = $this->input->post('libur');
            $price = $this->input->post('price');
            $jumlah = $this->input->post('jumlah');
            $role = 'dokter';
            $foto = $_FILES['foto']['name'];
            if ($foto != '') {
                $config['upload_path'] = './assets/img/newsimg';
                $config['allowed_types'] = 'jpg|png';
                $config['file_name']        = 'news-' .date('ymd').'-'.substr(md5(rand()),0,10);
                $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Failed Adding Data!</div>');
                    die();
            } else {
                $foto = $this->upload->data('file_name');
                $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Has Been Added!</div>');
                }
            } 

            $datauser = array(
                'nama' => $fullname,
                'email' => $email,
                'password' => password_hash($password,PASSWORD_DEFAULT),
                'is_active' => '1',
                'role' => $role
            );


            $datainsert = array (
                'fullname' => $fullname,
                'password' => password_hash($password,PASSWORD_DEFAULT),
                'role' => $role,
                'foto' => $foto,
                'address' => $address,
                'email' => $email,
                'telp' => $telp,
                'gender' => $gender,
                'jam' => $jam,
                'libur' => $libur,
                'jumlah' => $jumlah,
                'price' => $price,);

            $this->Psychologist_model->InsertDataPsy($datainsert);
            $this->auth->register2($datauser);
            $this->auth->register3($fullname, $password);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Has Been Added!</div>');
            redirect(base_url('psychologist'));
        }
        else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harus Diisi Semua</div>');
            redirect('psychologist');
        }
        
    }



    public function DeleteData($val)
    {
        $this->Psychologist_model->DeleteDataPsy($val);
        $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Has Been Deleted!</div>');
        redirect(base_url('psychologist'));
    }

    public function editpsychologist($id)
    {
        $recordPsy = $this->Psychologist_model->getDataPsychologistDetail($id);
        $dataedit = array('data_psy' =>$recordPsy);
        $bagian = $this->db->get_where('psychologist', ['id' => $id])->row();
        $data['pasien2'] = $this->db->get_where('user', ['nama' => $bagian->fullname])->row();
        $data['pasien'] = $this->db->get_where('users', ['name' => $bagian->fullname])->row();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) -> row_array();
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('admin/psychologist/editpsychologist', $dataedit, $data);
        $this->load->view('templates/footer');
    }

    public function EditAction()
    {
        $id = $this->input->post('id');
        $id1 = $this->input->post('id1');
        $id2 = $this->input->post('id2');
        $fullname = $this->input->post('fullname');
        $address = $this->input->post('address');
        $email = $this->input->post('email');
        $telp = $this->input->post('telp');
        $gender = $this->input->post('gender');
        $jam = $this->input->post('jam');
        $libur = $this->input->post('libur');
        $price = $this->input->post('price');

        $DataUpdate = array (
            'fullname' => $fullname,
            'address' => $address,
            'email' => $email,
            'telp' => $telp,
            'gender' => $gender,
            'jam' => $jam,
            'libur' => $libur,
            'price' => $price,
        );
        $datauser = array (
            'name' => $fullname,
            'username' => $fullname,
        );
        $databaru = array (
            'nama' => $fullname,
            'email' => $email,
        );

        $this->Psychologist_model->EditDataPsy($DataUpdate, $id);
        $this->Psychologist_model->Edit2($datauser, $id1);
        $this->Psychologist_model->Edit3($databaru, $id2);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Has Been Edited!</div>');
        redirect(base_url('psychologist'));
    }
}?>