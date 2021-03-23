<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Schedule_model');
    }

    public function index()
    {
        $recSchedule = $this->Schedule_model->getDataSchedule();
        $data1 = array('data_sch' => $recSchedule);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) -> row_array();
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('admin/schedule/schedule',$data1);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $date = $this->input->post('date');
        $time = $this->input->post('time');
        $psychologist = $this->input->post('psychologist');
        $location = $this->input->post('location');

        $datainsert = array (
            'date' => $date,
            'time' => $time,
            'psychologist' => $psychologist,
            'location' => $location,
        );
        
        $this->Schedule_model->InsertDataSch($datainsert);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Has Been Added!</div>');
        redirect(base_url('schedule'));

    }

    public function DeleteData($val)
    {
        $this->Schedule_model->DeleteDataSch($val);
        $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Has Been Deleted!</div>');
        redirect(base_url('schedule'));
    }

    public function editschedule($id)
    {
        $recordSch = $this->Schedule_model->getDataScheduleDetail($id);
        $dataedit = array('data_sch' =>$recordSch);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) -> row_array();
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('admin/schedule/editschedule', $dataedit);
        $this->load->view('templates/footer');
    }

    public function EditAction()
    {
        $id = $this->input->post('id');
        $date = $this->input->post('date');
        $time = $this->input->post('time');
        $psychologist = $this->input->post('psychologist');
        $location = $this->input->post('location');

        $DataUpdate = array (
            'date' => $date,
            'time' => $time,
            'psychologist' => $psychologist,
            'location' => $location,
        );

        $this->Schedule_model->EditDataSch($DataUpdate, $id);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Has Been Edited!</div>');
        redirect(base_url('schedule'));
    }


}?> 