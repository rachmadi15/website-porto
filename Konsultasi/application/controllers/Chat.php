<?php

class Chat extends CI_Controller
{
    public $user;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
        $this->load->helper(array('url', 'form'));
        $this->load->library('user_agent');

        if (!isset($this->session->userdata['is_login']) || $this->session->userdata['is_login'] === false) {
            redirect('welcome');
        }

        $this->user2 = $this->db->get_where('user', array('email' => $this->session->userdata['email']), 1)->row();
        $this->user = $this->db->get_where('users', array('name' => $this->user2->nama), 1)->row();
    }

    public function index()
    {
        $id = $this->db->get_where('pasien', ['email' => $this->session->userdata('email')])->row();
        
        if(empty($id))
        {
            $this->load->view('masuk/kedua');
        }
        else {
            $data['dokter'] = $this->db->get_where('psychologist', ['id' => $id->id])->row();
            $data['item'] = $this->db->get_where('users', ['name' => $data['dokter']->fullname])->row();
            $this->load->view('masuk/chat', $data);
        }
        
    }
    public function pasien2($id)
    {
        $data['dokter'] = $this->db->get_where('pasien', ['id_pasien' => $id])->row();
        $data['item'] = $this->db->get_where('users', ['name' => $data['dokter']->nama])->row();
        $this->load->view('psikiater/chat', $data);
    }

    public function getChats()
    {
        header('Content-Type: application/json');
        if ($this->input->is_ajax_request()) {
            // Find friend
            $friend = $this->db->get_where('users', array('id' => $this->input->post('chatWith')), 1)->row();

            // Get Chats
            $chats = $this->db
                ->select('chat.*, users.name')
                ->from('chat')
                ->join('users', 'chat.send_by = users.id')
                ->where('(send_by = '. $this->user->id .' AND send_to = '. $friend->id .')')
                ->or_where('(send_to = '. $this->user->id .' AND send_by = '. $friend->id .')')
                ->order_by('chat.time', 'desc')
                ->limit(100)
                ->get()
                ->result();

            $result = array(
                'name' => $friend->name,
                'chats' => $chats
            );
            echo json_encode($result);
        }
    }

    public function sendMessage()
    {
        $this->db->insert('chat', array(
            'message' => htmlentities($this->input->post('message', true)),
            'send_to' => $this->input->post('chatWith'),
            'send_by' => $this->user->id
        ));
    }
}