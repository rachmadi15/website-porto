<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('News_model');
        $this->load->model('auth');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $recMember = $this->News_model->getDataNews();
        $data['data_news'] =  $recMember;
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) -> row_array();
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('admin/news/news');
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $newstext = $this->input->post('newstext');
        $judul = $this->input->post('judul');
        $berita = $this->input->post('berita');
        $image = $_FILES['image']['name'];
        if ($image != '') {
            $config['upload_path'] = './assets/img/newsimg';
            $config['allowed_types'] = 'jpg|png';
            $config['file_name']        = 'news-' .date('ymd').'-'.substr(md5(rand()),0,10);
            $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Failed Adding Data!</div>');
                die();
        } else {
            $image = $this->upload->data('file_name');
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Has Been Added!</div>');
            }
        } 

        $datainsert = array (
            'newstext' => $newstext,
            'judul' => $judul,
            'berita' => $berita,
            'image' => $image
        );
        $databaru = array(
            'judul' => $judul,
            'berita_pendek' => $newstext,
            'berita_panjang' => $berita,
            'foto' => $image
        );
        $this->auth->berita_baru($databaru);
        $this->News_model->InsertDataNews($datainsert);
        redirect(base_url('news'));

    }

    public function editnews($id)
    {
        $recordNews = $this->News_model->getDataNewsDetail($id);
        $data['data_news'] =  $recordNews;
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) -> row_array();
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('admin/news/editnews', $data);
        $this->load->view('templates/footer');
    }

    public function EditAction()
    {
        $id = $this->input->post('id');
        $newstext = $this->input->post('newstext');
        $image    = $this->input->post('image');
        $dataedit = array (
            'newstext' => $newstext,
            'image' => $image
        );

        $this->News_model->EditDataNews($dataedit,$id);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Has Been Edited!</div>');
        redirect(base_url('news'));
        
    }

    public function DeleteData($id,$image)
    {
        unlink('./assets/img/newsimg/'.$image);

        $this->News_model->DeleteDataNews($id);
        $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Has Been Deleted!</div>');
        redirect(base_url('news'));
    }



}?>
