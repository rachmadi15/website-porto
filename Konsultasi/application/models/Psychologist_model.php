<?php 
defined('BASEPATH') OR exit('NO direct script access allowed');

class Psychologist_model extends CI_Model 
{
    public function getDataPsychologist()
    {
        $this->db->select('*');
        $this->db->from('psychologist');
        $query = $this->db->get();
        return $query->result();
    }

    public function getPsychologistById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function countPsychologist()
    {
        $sql = "Select count(id) as total from psychologist";
        $result = $this->db->query($sql);
        return $result->row()->total;
    }

    public function InsertDataPsy($data)
    {
        $this->db->insert('psychologist', $data);
    }

    public function DeleteDataPsy($val)
    {
        $this->db->where('id',$val);
        $this->db->delete('psychologist');
    }

    public function EditDataPsy($data, $id)
    {
        $this->db->where('id',$id);
        $this->db->update('psychologist', $data);
    }

    public function Edit2($data, $id)
    {
        $this->db->where('id',$id);
        $this->db->update('users', $data);
    }
    public function Edit3($data, $id)
    {
        $this->db->where('id',$id);
        $this->db->update('user', $data);
    }

    public function getDataPsychologistDetail($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('psychologist');
        return $query->row();
    }
}