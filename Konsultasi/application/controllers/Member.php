<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Member_model');
    }

    public function index()
    {
        
        $data1['data_mbr'] = $this->db->get_where('user', ['role' => 'member']) -> result();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) -> row_array();
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('admin/member/member',$data1);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $fullname = $this->input->post('fullname');
        $address = $this->input->post('address');
        $email = $this->input->post('email');
        $telp = $this->input->post('telp');
        $gender = $this->input->post('gender');

        $datainsert = array (
            'fullname' => $fullname,
            'address' => $address,
            'email' => $email,
            'telp' => $telp,
            'gender' => $gender,
        );
        
        $this->Member_model->InsertDataMbr($datainsert);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Has Been Added!</div>');
        redirect(base_url('member'));

    }

    public function DeleteData($val)
    {
        $this->Member_model->DeleteDataMbr($val);
        $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Has Been Deleted!</div>');
        redirect(base_url('member'));
    }

    public function editmember($id)
    {
        $recordMbr = $this->Member_model->getDataMemberDetail($id);
        $dataedit = array('data_mbr' =>$recordMbr);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) -> row_array();
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('admin/member/editmember', $dataedit);
        $this->load->view('templates/footer');
    }

    public function EditAction()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $kota = $this->input->post('kota');
        $email = $this->input->post('email');
        $telepon = $this->input->post('telepon');
        $gender = $this->input->post('gender');

        $DataUpdate = array (
            'nama' => $nama,
            'kota' => $kota,
            'email' => $email,
            'telepon' => $telepon,
            'jk' => $jk,
        );

        $this->Member_model->EditDataMbr($DataUpdate, $id);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Has Been Edited!</div>');
        redirect(base_url('member'));
    }

}?>